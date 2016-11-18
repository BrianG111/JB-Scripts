<?php
// Look and feel contains $color and $size
class LookAndFeel {
    var $color;
    var $size;
    function LookAndFeel()
    {
        $this->color = 'white';
        $this->size = 'medium';
    }
    function getColor()
    {
        return $this->color;
    }
    function getSize()
    {
        return $this->size;
    }
    function setColor($color)
    {
        $this->color = $color;
    }
    function setSize($size)
    {
        $this->size = $size;
    }
}

// Output deals with building content for display
class Output {
    var $lookandfeel;
    var $output;

    // Constructor take LookAndFeel as it argument
    function Output($lookandfeel)
    {
        $this->lookandfeel = $lookandfeel;
    }
    function buildOutput()
    {
        $this->output = 'Color is ' . $this->lookandfeel->getColor() .
            ' and size is ' . $this->lookandfeel->getSize();
    }
    function display()
    {
        $this->buildOutput();
        return $this->output;
    }
}

// Create an instance of LookAndFeel
$lookandfeel = new Output($lookandfeel);

// Pass it to an instance of Output
$output = new Output($lookandfeel);

// Display the output
echo $output->display();
?>