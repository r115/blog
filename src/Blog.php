<?php namespace Nandwabee;

class Blog{
  function __construct(){
    $this->repo = new BlogRepository;
  }
  /**
   * Store a new blog. At this moment this is tightly coupled to Laravel. 
   */
  public function store($payload){
    return $this->repo->create($payload);
  }

  public function get(){

  }

  public function destroy(){

  }

  public function update(){

  }

  public function edit(){}

  public function create(){}

  public function index(){}
}