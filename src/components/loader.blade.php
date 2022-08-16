@props([
  'width' => '50px',
  'height' => '50px',
  'lWidth' => 10,
  'lHeight' => 8,
  'lCount' => 10,
  'color' => '#4c3939',
  'loading' => true
  ])

@if($loading)
<div {{ $attributes->class(['max-w-max']) }}>

  <div class="">
    <?xml version="1.0" encoding="utf-8"?>
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="{{ $width }}" height="{{ $height }}" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">

    @for ($i = 0; $i < $lCount; $i++)
      <g transform="rotate({{ ($i / $lCount * 360) }} 50 50)">
        <rect x="44.5" y="22" rx="5" ry="4" width="{{ $lWidth }}" height="{{ $lHeight }}" fill="{{ $color }}">
          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-{{ $i % 360 / $lCount }}s" repeatCount="indefinite"></animate>
        </rect>
      </g>
    @endfor

    </svg>

  </div>
{{-- comment
<?xml version="1.0" encoding="utf-8"?>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="{{ $width }}" height="{{ $height }}" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
<g transform="rotate(0 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9772727272727273s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(8.181818181818182 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9545454545454546s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(16.363636363636363 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9318181818181818s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(24.545454545454547 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9090909090909091s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(32.72727272727273 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8863636363636364s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(40.90909090909091 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8636363636363636s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(49.09090909090909 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8409090909090909s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(57.27272727272727 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8181818181818182s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(65.45454545454545 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.7954545454545454s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(73.63636363636364 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.7727272727272727s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(81.81818181818181 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(90 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.7272727272727273s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(98.18181818181819 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.7045454545454546s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(106.36363636363636 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6818181818181818s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(114.54545454545455 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6590909090909091s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(122.72727272727273 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6363636363636364s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(130.9090909090909 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6136363636363636s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(139.0909090909091 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5909090909090909s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(147.27272727272728 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5681818181818182s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(155.45454545454547 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5454545454545454s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(163.63636363636363 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5227272727272727s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(171.8181818181818 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(180 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4772727272727273s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(188.1818181818182 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.45454545454545453s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(196.36363636363637 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4318181818181818s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(204.54545454545453 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4090909090909091s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(212.72727272727272 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.38636363636363635s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(220.9090909090909 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.36363636363636365s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(229.0909090909091 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3409090909090909s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(237.27272727272728 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3181818181818182s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(245.45454545454547 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.29545454545454547s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(253.63636363636363 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.2727272727272727s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(261.8181818181818 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(270 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.22727272727272727s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(278.1818181818182 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.20454545454545456s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(286.3636363636364 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.18181818181818182s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(294.54545454545456 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.1590909090909091s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(302.72727272727275 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.13636363636363635s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(310.90909090909093 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.11363636363636363s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(319.09090909090907 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.09090909090909091s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(327.27272727272725 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.06818181818181818s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(335.45454545454544 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.045454545454545456s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(343.6363636363636 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.022727272727272728s" repeatCount="indefinite"></animate>
  </rect>
</g><g transform="rotate(351.8181818181818 50 50)">
  <rect x="44.5" y="22" rx="5.5" ry="4" width="{{ $lWidth }}" height={{ $lWidth }}" fill="#4c3939">
    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>
  </rect>
</g>
<!-- [ldio] generated by https://loading.io/ --></svg>
--}}
</div>
@endif