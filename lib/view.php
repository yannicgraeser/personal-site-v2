<?php

class View
{
  public static function factory($file = NULL, array $data = NULL)
  {
    return new View($file, $data);
  }

  // View filename
  protected $_file;

  // Array of local variables
  protected $_data = array();


  public function __construct($file, array $data = NULL)
  {
    $this->_file = $file;

    if($data !== NULL)
    {
      $this->_data = $data + $this->_data;
    }
  }


  public function & __get($key)
  {
    if (isset($this->_data[$key]))
    {
      return $this->_data[$key];
    }
    elseif (isset(View::$_global_data[$key]))
    {
      return View::$_global_data[$key];
    }
    else
    {
      throw new Kohana_Exception('View variable is not set: :var',
        array(':var' => $key));
    }
  }

  public function __set($key, $value)
  {
    $this->set($key, $value);
  }

  public function __toString()
  {
    try
    {
      return $this->render();
    }
    catch(Exception $e)
    {
      return '';
    }
  }

  public function set($key, $value = NULL)
  {
    if(is_array($key))
    {
      foreach($key as $name => $value)
      {
        $this->_data[$name] = $value;
      }
    }
    else
    {
      $this->_data[$key] = $value;
    }

    return $this;
  }


  public function render()
  {
    extract($this->_data, EXTR_SKIP);

    ob_start();

    try
    {
      include 'views/' . $this->_file . '.php';
    }
    catch(Exception $e)
    {
      ob_end_clean();
      throw $e;
    }

    return ob_get_clean();
  }
}
