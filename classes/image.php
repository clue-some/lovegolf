<?php

class image {
	private $maxwidth = 1024;
	private $source;
	private $destination;
	private $image;
	private $message;

	public function __construct()
	{
		
		return $this;
	}

	public function get_source()
	{
		return $this->source;
	}

	public function get_destination()
	{
		return $this->destination;
	}

	public function get_message()
	{
		return $this->message;
	}

	public function get_maxwidth()
	{
		return $this->maxwidth;
	}

	public function get_image()
	{
		return $image;
	}

	public function set_source($input)
	{
		$this->source = $input;
	}

	public function set_destination($input)
	{
		// All files will be JPEG, so change extension
		$this->destination = $input;
	}

	public function get_sizes()
	{
		if (!$sizes = getimagesize($this->source)) {
			throw new Exception("Invalid file format. Images must be either JPEG, GIF or PNG" , 2);
		}
		return $sizes;
	}

	public function resize($new_width = false, $new_height = false, $quality = 100)
	{
		$sizes = $this->get_sizes();
		$aspect_ratio = $sizes[0] / $sizes[1];
		if ($new_width && $new_height) {
			$temp_height = abs($new_width/$aspect_ratio);
			if ($temp_height > $new_height) {
				$new_width = abs($new_height*$aspect_ratio);	
			} else {
				$new_height = abs($new_width/$aspect_ratio);
			}
		} elseif ($new_width) {
			$new_height = abs($new_width/$aspect_ratio);
		} elseif ($new_height) {
			$new_width = abs($new_height*$aspect_ratio);
		} else {
			throw new Exception("A width or height must be specified.");
		}
		if (!$this->image = imagecreatetruecolor($new_width, $new_height)) {
			throw new Exception("Unable to read image" , 1);
		}
		switch ($sizes[2]) {
			case 1 : $srcimg = imagecreatefromgif($this->source);
				break;
			case 2 : $srcimg = imagecreatefromjpeg($this->source);
				break;
			case 3 : $srcimg = imagecreatefrompng($this->source);
				break;
		}
		if (!$srcimg) {
			throw new Exception("Invalid image format. Images must be JPEG, GIF or PNG" , 2);
		}
		if (!function_exists('imagecopyresampled')) {
			throw new Exception("Could not resample image" , 3);
		}
		imagecopyresampled($this->image, $srcimg, 0, 0, 0, 0, $new_width, $new_height, imagesx($srcimg), imagesy($srcimg));
		if (!imagejpeg($this->image, $this->destination, $quality)) {
			throw new Exception("Unable to save image" , 3);
		}
		imagedestroy($this->image);
	}

	public function crop($new_width = false, $new_height = false, $center = true, $quality = 100)
	{
		if (!$sizes = getimagesize($this->source)) {
			throw new Exception("Invalid image format. Images must be JPEG, GIF or PNG" , 2);
		}
		$width_offset = 0;
		$height_offset = 0;
		if ($new_width && !$new_height) {
			$new_height = $sizes[1];
			$width_offset = ($sizes[0] - $new_width) / 2;
		} elseif ($new_height && !$new_width) {
			$new_width = $sizes[0];
			$height_offset = ($sizes[1] - $new_height) / 2;
		} else {
			throw new Exception("At least a width or a height must be specified.");
		}
		if (!$this->image = imagecreatetruecolor($new_width, $new_height)) {
			throw new Exception("Unable to read image" , 1);
		}
		switch ($sizes[2]) {
			case 1 : $srcimg = imagecreatefromgif($this->source);
				break;
			case 2 : $srcimg = imagecreatefromjpeg($this->source);
				break;
			case 3 : $srcimg = imagecreatefrompng($this->source);
				break;
		}
		if (!$srcimg) {
			throw new Exception("Invalid image format. Images must be JPEG, GIF or PNG" , 2);
		}
		imagecopy($this->image, $srcimg, 0, 0, $width_offset, $height_offset, $new_width, $new_height);
		if (!imagejpeg($this->image, $this->destination, $quality)) {
			throw new Exception("Unable to save image" , 3);
		}
		imagedestroy($this->image);
	}

}

?>