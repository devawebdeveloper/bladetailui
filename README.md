# BladeTailUI
### Blade Tailwind UI for Laravel with Alpine JS

Perfectly comfortable with jetstream livewire stack. otherwise, you must install Alpine Js Manually!

```
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
```

[Click to know more about Alpine JS](https://github.com/alpinejs/alpine)

To install on your laravel project

``` 
composer require devaweb/bladetailui 
```

#### Publish the assets
```
php artisan vendor:publish --tag=btui
```


### When update the package republish the assets with this btui-update tag
```
php artisan vendor:publish --tag=btui-update --force
```


### Available components

1. Alert
2. Button
3. Dropdown
4. Input
5. Select
6. loader
7. Hero
8. Navbar
9. Modal
10. Smodal
11. Sloader
12. Toast
13. Admin Layout

***

**Usage**

## Alert

```
<x-btui-alert type="success"> Success! </x-btui-alert>
```

#### Properties

| Name     | Type    | Default | Options |
|-------   |---      |---|---|
| Text     | String  | "" | - |
| Type     | String  | Success | Primary,Success,Warning,Danger,Info |
| Closable | Boolean | False |True or False  |

***

<br/>

## Button

```
<x-btui-button color="gray"> Click It! </x-btui-button>
```

#### Properties
| Name     | Type    | Default | Options |
|-------   |---      |---|---|
| Color     | String  | white | White,Gray,Blue,Red,Green,Yellow,Purple,Pink,Indigo |
| Size | String | Small | sm,md,lg,xl  |

<br>

If you want to use light color in buttons use "light" before color names 

**Ex: light-gray**

#### Dark Red Button
```
<x-btui-button color="red"> Click It! </x-btui-button>
```

#### Light Red Button
```
<x-btui-button color="light-red"> Click It! </x-btui-button>
```

<br/>


***

More components are under development. It will be updated soon.
