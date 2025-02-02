@extends('web.layouts.page')

@section('page_content')
    <section class="py-16 bg-white">
        <div class="container">
            <h3 class="text-3xl text-orange-500 font-bold ps-5 border-s-4 border-s-orange-500 mb-5">Core Members</h3>
            <div>
                @foreach ($members as $member)
                    <div class="grid grid-cols-3 gap-10 mb-10">
                        <div class="col-span-1">
                            <div class="relative p-8">
                                <span class="absolute top-0 end-0 size-12 border-t-2 border-e-2 border-orange-500"></span>
                                <span
                                    class="absolute bottom-0 start-0 size-12 border-b-2 border-s-2 border-orange-500"></span>
                                <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}"
                                    class="w-full shadow-lg aspect-square">
                            </div>
                        </div>
                        <div class="col-span-2">
                            <h1 class="text-xl font-bold text-gray-800">{{ $member['name'] }}</h1>
                            <h2 class="text-lg font-semibold text-gray-400">{{ $member['position'] }}</h2>
                            <p class="text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum dolor, exercitationem
                                molestias voluptatibus autem non minima odit impedit fugiat tenetur iusto, dolores laborum
                                voluptates, sunt dignissimos error corrupti distinctio in veniam facilis velit? Voluptatibus
                                error reiciendis nostrum accusantium ex! Nemo eveniet minima tempore modi, cum quaerat ipsa
                                porro, voluptatibus, ad praesentium ab officiis sunt! Dolor iste ducimus unde, facere
                                voluptatibus quae aperiam exercitationem eligendi non quasi cumque illum libero, autem rem
                                quod quaerat sunt delectus quo eius quas dolorem doloribus omnis? Quia facere ipsum possimus
                                doloremque natus aliquam vel neque fugiat ab itaque. Iure nostrum amet labore nihil eum
                                impedit odit, voluptates, culpa quod aut neque! Nobis necessitatibus provident voluptatem
                                quod non magni officia, cumque rem, omnis esse culpa laudantium quae veniam, ipsam nihil
                                aspernatur commodi eum eius accusantium ut harum unde vitae beatae ea? Tempora qui rerum
                                quasi doloribus rem unde reprehenderit nemo, magnam laboriosam nihil possimus saepe,
                                recusandae aut eveniet iure vitae aliquam accusantium officiis veniam dolorum nulla
                                repellendus. Nulla ipsam iste fugiat veritatis vero, architecto natus temporibus quidem
                                similique adipisci eligendi quo quasi incidunt ex delectus hic laudantium. Et voluptas
                                aliquid excepturi, omnis aut officia nulla deleniti, beatae vero placeat voluptatum soluta
                                tempore doloremque, adipisci dolore magnam.
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
