<?php

class Staff_Application extends Eloquent{

	public function user(){
		return $this->belongsTo("User");
	}
}