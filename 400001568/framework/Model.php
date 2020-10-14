<?php
    abstract class Model implements Observable
    {
        private $observers = array();
        private $data = array();
        protected $obsolutepath;

        abstract public function getAll(): array;
        abstract public function getRecord(string $id): array;

        public function attach(Observer $observer)
        {
            array_push($this->observers, $observer);
        }

        public function detach(Observer $observer)
        {
            $this->observers = array_filter(
                $this->observers,
                function ($a) use ($observer) {
                    return (! ($a === $observer ));
                }
            );
        }

        public function setData(array $d)
	    {
		$this->data = $d;
	    }

	    public function getData():array
	    {
		return $this->data;
	    }

        public function notify()
        {
            foreach ($this->observers as $obs)
            {
                $obs->update($this);
            }
        }

        public function getObservers(): array
        {
            return $this->observers;
        }
    }

?>