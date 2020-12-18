<?php
	class Message
	{
	  public function formatMessage($message)
	  {
	    return printf("<i>%s</i>", $message);
	  }
	}
	 
	class BoldMessage extends Message
	{
	  public function formatMessage($message)
	  {
	    return printf("<b>%s</b>", $message);
	  }
	}
	 
	$message = new Message();
	echo $message->formatMessage('Hello World')."<br>"; // prints '<i>Hello World</i>'
	 
	$message = new BoldMessage();
	$message->formatMessage('Hello World'); // prints '<b>Hello World</b>'
?>