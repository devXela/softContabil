<?php
 	return [
 		'inputContainer' => '<div class="form-group">{{content}}</div>',
 		'inputContainerError' => '<div class="form-group has-error"></div>',
 		'select' => '<select class="form-control" name="{{name}}" {{attrs}} ><option>Selecione</option>{{content}}</select>',
 		'input' => '<input type={{type}} name={{name}} class="form-control" {{attrs}} />',
 		'button' => '<button class="btn btn-primary" {{attrs}}>{{text}}</button>'
 	];
?>