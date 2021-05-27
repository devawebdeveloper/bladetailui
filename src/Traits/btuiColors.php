<?php

namespace Devaweb\BladeTailUI\Traits;

use Illuminate\Support\Arr;

trait btuiColors
{

    //$colors = $cs
    public $cs = [

        //black and white
        'white' => [
            'bg' => 'bg-white',
            'border' => 'border-gray-300',
            'text' => 'text-black'
        ],

        'white-hover' => [
            'bg' => 'bg-gray-200',
            'border' => 'border-gray-400',
            'text' => 'text-black'
        ],

        'black' => [
            'bg' => 'bg-black',
            'border' => 'border-gray-700',
            'text' => 'text-white'
        ],

        'black-hover' => [
            'bg' => 'bg-gray-800',
            'border' => 'border-gray-600',
            'text' => 'text-white'
        ],

        //gray
        'gray' => [

            'dark' => [
                'bg' => 'bg-gray-700',
                'border' => 'border-gray-900',
                'text' => 'text-white'
            ],

            'dark-hover' => [
                'bg' => 'bg-gray-900',
                'border' => 'border-gray-700',
            ],

            'light' => [
                'bg' => 'bg-gray-200',
                'border' => 'border-gray-300',
                'text' => 'text-black'
            ],

            'light-hover' => [
                'bg' => 'bg-gray-500',
                'border' => 'border-gray-400',
            ],

        ],

        //green
        'green' => [

            'dark' => [
                'bg' => 'bg-green-700',
                'border' => 'border-green-900',
                'text' => 'text-white'
            ],

            'dark-hover' => [
                'bg' => 'bg-green-900',
                'border' => 'border-green-700',
            ],

            'light' => [
                'bg' => 'bg-green-200',
                'border' => 'border-green-300',
                'text' => 'text-black'
            ],

            'light-hover' => [
                'bg' => 'bg-green-500',
                'border' => 'border-green-400',
            ],

        ],

        //purple
        'purple' => [

            'dark' => [
                'bg' => 'bg-purple-700',
                'border' => 'border-purple-900',
                'text' => 'text-white'
            ],

            'dark-hover' => [
                'bg' => 'bg-purple-900',
                'border' => 'border-purple-700',
            ],

            'light' => [
                'bg' => 'bg-purple-200',
                'border' => 'border-purple-300',
                'text' => 'text-black'
            ],

            'light-hover' => [
                'bg' => 'bg-purple-500',
                'border' => 'border-purple-400',
            ],

        ],


        //blue
        'blue' => [

            'dark' => [
                'bg' => 'bg-blue-700',
                'border' => 'border-blue-900',
                'text' => 'text-white'
            ],

            'dark-hover' => [
                'bg' => 'bg-blue-900',
                'border' => 'border-blue-700',
            ],

            'light' => [
                'bg' => 'bg-blue-200',
                'border' => 'border-blue-300',
                'text' => 'text-black'
            ],

            'light-hover' => [
                'bg' => 'bg-blue-500',
                'border' => 'border-blue-400',
            ],

        ],

        //indigo
        'indigo' => [

            'dark' => [
                'bg' => 'bg-indigo-700',
                'border' => 'border-indigo-900',
                'text' => 'text-white'
            ],

            'dark-hover' => [
                'bg' => 'bg-indigo-900',
                'border' => 'border-indigo-700',
            ],

            'light' => [
                'bg' => 'bg-indigo-200',
                'border' => 'border-indigo-300',
                'text' => 'text-black'
            ],

            'light-hover' => [
                'bg' => 'bg-indigo-500',
                'border' => 'border-indigo-400',
            ],

        ],

        //red
        'red' => [

            'dark' => [
                'bg' => 'bg-red-700',
                'border' => 'border-red-900',
                'text' => 'text-white'
            ],

            'dark-hover' => [
                'bg' => 'bg-red-900',
                'border' => 'border-red-700',
            ],

            'light' => [
                'bg' => 'bg-red-200',
                'border' => 'border-red-300',
                'text' => 'text-black'
            ],

            'light-hover' => [
                'bg' => 'bg-red-500',
                'border' => 'border-red-400',
            ], 
            
        ],

        //yellow
        'yellow' => [

            'dark' => [
                'bg' => 'bg-yellow-700',
                'border' => 'border-yellow-900',
                'text' => 'text-white'
            ],

            'dark-hover' => [
                'bg' => 'bg-yellow-900',
                'border' => 'border-yellow-700',
            ],

            'light' => [
                'bg' => 'bg-yellow-200',
                'border' => 'border-yellow-300',
                'text' => 'text-black'
            ],

            'light-hover' => [
                'bg' => 'bg-yellow-500',
                'border' => 'border-yellow-400',
            ], 
            
        ],

        //pink
        'pink' => [

            'dark' => [
                'bg' => 'bg-pink-700',
                'border' => 'border-pink-900',
                'text' => 'text-white'
            ],

            'dark-hover' => [
                'bg' => 'bg-pink-900',
                'border' => 'border-pink-700',
            ],

            'light' => [
                'bg' => 'bg-pink-200',
                'border' => 'border-pink-300',
                'text' => 'text-black'
            ],

            'light-hover' => [
                'bg' => 'bg-pink-500',
                'border' => 'border-pink-400',
            ], 
            
        ],


    ];


    public function bcolors($name)
    {
        if(Arr::has($this->cs, $name)) {
            return Arr::get($this->cs, $name);
        }
        
    }

   
}
