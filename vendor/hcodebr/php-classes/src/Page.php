<?php

namespace Hcode;
use Rain\Tpl;

class Page {
    private $tpl;
	private $options = [];
	private $defaults = [
		"header"=>true,
		"footer"=>true,
		"data"=>[]
	];

	public function __construct($opts = array()){
		
		$this->options = array_merge($this->defaults, $opts);

		$config = array(
			"tpl_dir"       => "views/",
			"cache_dir"     => "views-cache/",
			"debug"         => false,
	    );

		Tpl::configure( $config );

		$this->tpl = new Tpl;

		$this->setData($this->options["data"]);

		if ($this->options["header"] === true) $this->tpl->draw("header");

	}

    public function setData($data = array()) {
        foreach($data as $key => $value) {
            $this->tpl->assign($key, $value);
        }
    }

	public function setTpl($name, $data=array(), $returnHTML = false) {
		$this->setData($data);
		return $this->tpl->draw($name, $returnHTML);
	}

    public function __destruct() {
        $this->tpl->draw("footer");
    }

}