<?php

/*
 * Class: email
 * Author: Chris Wheeler
 *
 */

class ogtemail {

	public $html;
	public $headers;
	public $message;
	public $body;
	public $subject;
	public $from;
	public $to;
	
	public function __construct($subject, $body, $from, $to, $html = false) {
		$this->subject = $subject;
		$this->body = $body;
		$this->from = $from;
		$this->to = $to;
		$this->html = $html;
	}

	private function create_headers() {
		$headers =  "From: ".$this->from."  \n";
		$headers .= "Reply-To: ".$this->from." \n";
		$headers .= "MIME-Version: 1.0\n";
		$headers .= "Content-Type: multipart/mixed; boundary=\"MIME_BOUNDRY_YLU\"\n";
		$headers .= "X-Sender: ".$this->from."\n";
		$headers .= "X-Mailer: PHP " . PHP_VERSION . "\n";
		$headers .= "X-Priority: 3\n";
		$headers .= "Return-Path: ".$this->from."\n";
		$headers .= "This is a multi-part message in MIME format.";
		$this->headers = $headers;
		return $headers;
	}

	private function create_message() {
		$message = "--MIME_BOUNDRY_YLU\n";
		if ($this->html) {
			$message .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
			$message .= "Content-Transfer-Encoding: 7bit\n";
		} else {
			$message .= "Content-Type: text/plain; charset=\"iso-8859-1\"\n";
			$message .= "Content-Transfer-Encoding: 7bit\n";
		}
		$message .= "\n";
		$message .= $this->body;
		$message .= "\n";
		$this->message = $message;
		return $message;
	}

	public function send() {
		$this->anti_spam();
		$this->check_for_html();
		if (!mail($this->to, $this->subject, $this->create_message(), $this->create_headers(), '-f ' . $this->from)) {
			throw new Exception('Unable to send email.');
		}
	}

	private function anti_spam() {
		$spam = array('cc:', 'bcc:', 'to:', 'content-type:', '\n', '\r');
		$this->to = trim(str_ireplace($spam, '', $this->to));
		$this->from = trim(str_ireplace($spam, '', $this->from));
		$this->subject = trim(str_ireplace($spam, '', $this->subject));
		$this->body = trim(str_ireplace($spam, '', $this->body));
	}

	private function check_for_html() {
		if (!$this->html && (preg_match("[\[(.*?)\]]", $this->body) || preg_match("[\<(.*?)\>]", $this->body))) {
			throw new Exception('HTML/BBCODE is not allowed.');
		}
	}
}

?>