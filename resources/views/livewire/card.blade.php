<a href="/courses" class="hover:bg-blue-200 w-full h-full  p-6 lg:p-8">
    @if (isset($num))
        <p class="font-bold text-4xl">{{ $numbers }}</p>  
    @else
        <p class="font-bold text-4xl">{{ $students }}</p>  
    @endif
    <p>{{ $content }}</p>
</a>
