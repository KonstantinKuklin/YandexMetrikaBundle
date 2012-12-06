# YandexMetrikaBundle

Bundle для простой установки счетчика метрики.

## Installation 2.0

### deps

    git submodule add git@github.com:antimattr/GoogleBundle.git src/AntiMattr/GoogleBundle

### Application Kernel

Add GoogleBundle to the `registerBundles()` method of your application kernel:

    public function registerBundles()
    {
        return array(
            new AntiMattr\GoogleBundle\GoogleBundle(),
        );
    }

## Configuration