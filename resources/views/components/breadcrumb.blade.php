@props(['items' => []])

<nav class="py-4 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full text-xs font-semibold text-[#747C76]" aria-label="Breadcrumb">
    <ol class="flex items-center flex-wrap gap-2">
        <li class="inline-flex items-center">
            <a href="{{ route('home') }}" class="hover:text-[#103B30] transition-colors flex items-center gap-1.5">
                <i class="fa-solid fa-house text-[11px] text-[#103B30]"></i>
                <span>Home</span>
            </a>
        </li>

        @foreach ($items as $item)
        <li class="flex items-center gap-2">
            <i class="fa-solid fa-chevron-right text-[9px] text-[#747C76]/60"></i>
            @if (!empty($item['url']) && !$loop->last)
                <a href="{{ $item['url'] }}" class="hover:text-[#103B30] transition-colors">
                    {{ $item['label'] }}
                </a>
            @else
                <span class="text-[#103B30] font-bold" aria-current="page">
                    {{ $item['label'] }}
                </span>
            @endif
        </li>
        @endforeach
    </ol>
</nav>

{{-- Schema.org BreadcrumbList --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "{{ route('home') }}"
    }
    @foreach ($items as $index => $item)
    ,{
      "@type": "ListItem",
      "position": {{ $index + 2 }},
      "name": "{{ addslashes($item['label']) }}",
      "item": "{{ !empty($item['url']) ? $item['url'] : url()->current() }}"
    }
    @endforeach
  ]
}
</script>
