<?php 
use PHPUnit\Framework\TestCase;

class ArchiTest extends TestCase
{
    public function testDirectoryFailure()
    {
        $this->assertDirectoryExists(ROOT_DIR. '/app');
        $this->assertDirectoryExists(ROOT_DIR. '/app/nane');
        $this->assertDirectoryExists(ROOT_DIR. '/src');
        $this->assertDirectoryExists(ROOT_DIR. '/templates');
        
    }
    public function testFileFailure() 
    {
        $this->assertFileExists(ROOT_DIR. '/app/config.php');
        $this->assertFileExists(ROOT_DIR. '/app/config.php.example');
        $this->assertFileExists(ROOT_DIR. '/public/index.php');
    }
}