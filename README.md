php-rmrdir
==========

Recursive rmdir for PHP

## Usage

### Installation

##### Via Composer

Rmrdir is available on Packagist ([perchten/rmrdir](https://packagist.org/packages/perchten/rmrdir)) and as such is installable via [Composer](https://getcomposer.org/).

Add the following to your `composer.json`

	{
    	"require": {s
        	"perchten/rmrdir": "1.*"
	    }
	}

##### Direct include

Clone or download from [GitHub](https://github.com/perchten/php-rmrdir) and include directly in your code:

	require_once "path/to/rmrdir.php"

### Code

	rmrdir($dir)
	
Returns `True` on Success, `False` on failure


## License

`rmrdir` is licensed under the MIT License - see the `LICENSE` file for details

## Acknowledgements

This code was initially found on a [Stack Overflow](http://stackoverflow.com/) thread. I'm just making it available on repos for ease and further development.


