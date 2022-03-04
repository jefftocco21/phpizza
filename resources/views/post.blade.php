<x-layout>
    <article class="container mx-auto">
        <h1>{!!$post->title!!}</h1>
        <p>
            <a href="/toppings/{{$post->topping->slug}}">{{$post->topping->name}}</a>
        </p>
        <div>
            {!! $post->body; !!}
        </div>
    </article>
    <a href="/">Go Back</a>
</x-layout>

