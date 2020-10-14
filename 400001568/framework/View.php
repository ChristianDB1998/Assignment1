<?php 

class View implements Observer
{
    private $var;
    private $tpl;
    private $obs; 

    public function __construct()
    { 
        $this->var = array();
        $this->obs = array();
        $this->tpl = "";
    }

    public function setTemplate($filename)
    {
        $this->tpl = $filename;
    }

    public function getObs(): array
    {
        return $this->obs;
    }

    public function display():void
	{
		if($this->vars != array())
		{
			extract($this->vars);
		}
		$this->obsData;
        require $this->tpl;
	}

	public function addVar($name,$value):void
	{
		 $this->vars[$name] = $value;
	}


	public function update(Observable $observable)
	{
		if(!is_array($this->obs))
		{
			$this->obs[] = $observable->getData();
		}
		else{
			array_push($this->obs,$observable->getData());
		}
	}
    
}

?>