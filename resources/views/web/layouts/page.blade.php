@extends('web.layouts.default')

@section('main_content')
    <section class="bg-gray-700 relative">
        <img src="https://img.freepik.com/free-vector/old-retro-movie-projector-background-realistic-composition-with-ray-light-illuminating-smoke-with-brick-wall-vector-illustration_1284-84884.jpg?t=st=1738470780~exp=1738474380~hmac=311c18fa76c79a060ae9b8558eaf674f6d3820a5ee191d1a15253af1283f1eda&w=1800"
            alt="" class="w-full h-full object-cover aspect-[4/1]">
        <div class="absolute left-0 right-0 bottom-0 top-0 flex flex-col justify-end py-16 bg-black/70">
            <div class="container">
                <h1 class="text-5xl font-bold text-white mb-3">{{ $page->title }}</h1>
                <div class="flex gap-3 text-gray-300">
                    <a href="{{ route('home') }}" class="flex items-center gap-1 text-white font-bold hover:underline">
                        <i class="bi bi-house"></i> Home
                    </a>
                    <span>&raquo;</span>
                    <span>{{ $page->title }}</span>
                </div>
            </div>
        </div>
    </section>
    @if (!empty($page->description))
        <section class="py-16">
            <div class="container">
                {!! $page->description !!}
            </div>
        </section>
    @endif

    <section class="py-16">
        <div class="container">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati accusamus odit asperiores sed expedita
            tenetur nulla voluptatum autem iste dolorem cumque dignissimos, ipsam nesciunt. Necessitatibus tempora quos
            tenetur fuga nostrum amet recusandae iure est impedit repudiandae magni, mollitia in eos placeat porro id
            laboriosam quibusdam ducimus aperiam. Facilis, saepe perspiciatis. Corrupti rem qui expedita vel quam vitae,
            modi dignissimos officiis, ea temporibus earum error aliquid eos debitis suscipit? Accusantium totam,
            praesentium in earum atque delectus rerum reprehenderit esse commodi odio nostrum, necessitatibus aut officia
            vitae, sint quas deleniti veritatis iure repellendus nisi suscipit exercitationem consectetur. Vitae soluta in
            iure necessitatibus doloribus, non debitis. Sit est dignissimos sunt modi doloremque cum distinctio? Laboriosam
            porro, totam ea eum quas nulla, vitae incidunt reprehenderit, consequuntur quae repellat sed id ducimus. Qui
            fugit exercitationem quos dicta nesciunt esse, possimus provident quo voluptates voluptate et, mollitia,
            laudantium illo? Accusantium atque impedit ab officia ipsa saepe, corrupti dicta beatae repudiandae alias, sint
            tenetur vero tempore veniam rerum, voluptatum vel. Ducimus optio reiciendis nobis nemo sint itaque, quidem
            deserunt possimus? Itaque, excepturi sint libero ipsa assumenda corporis deserunt perferendis exercitationem?
            Itaque reprehenderit odio id debitis aut. Asperiores corrupti architecto facere error quo exercitationem illum
            praesentium sunt, mollitia quas tenetur, iusto quod dolores deleniti eligendi sint, quos et ipsum fuga!
            Repellendus deserunt harum dolorum doloribus nulla optio facilis totam ad tenetur rerum. Delectus, facere
            temporibus repudiandae labore amet dignissimos aspernatur facilis nemo magni minima quas molestias reprehenderit
            voluptatibus ratione. Inventore ipsam, et autem ad repellat harum alias neque in, minima eos hic impedit?
            Aliquid suscipit quibusdam explicabo quidem. Dolor enim, nesciunt accusantium similique, labore, beatae
            obcaecati soluta vitae omnis est vel culpa quod error nostrum dignissimos laborum molestias commodi. Distinctio
            dolorem iste ducimus, quas dolorum, corrupti possimus sequi accusamus quis, voluptate officiis mollitia earum
            repellat similique perferendis cum? Ullam voluptas sequi sed explicabo delectus. Cum quaerat ratione, aspernatur
            numquam repellendus impedit nam illum neque provident accusamus voluptate voluptates ab accusantium harum
            perferendis temporibus quia animi recusandae fugit eius obcaecati officiis autem! Accusantium, consequatur iure
            delectus quas commodi explicabo suscipit, culpa ipsa exercitationem reiciendis numquam fugit laudantium rem sunt
            minus. Nemo porro quis veritatis mollitia fuga perferendis quibusdam officiis id accusamus molestiae ipsam,
            ullam ex vitae magnam illo cumque inventore enim ratione laborum, quod, accusantium eius. Omnis praesentium
            cumque neque impedit deserunt officia qui quae, dolorem provident culpa quibusdam exercitationem. Iure dolores
            tempore totam. Adipisci optio delectus maxime ab. Velit, quisquam magnam quis in cumque natus nemo corporis quod
            nisi odit. Numquam architecto rem quo dignissimos iusto nulla nemo nam cupiditate sit incidunt natus ipsa modi
            impedit, esse aspernatur cumque maiores itaque delectus velit. Expedita tempore laudantium eligendi ab?
            Exercitationem tempore veritatis aperiam natus at distinctio quidem reprehenderit sit, odio, explicabo dolorum
            illum eius modi dicta. Facere tempore debitis omnis accusamus, quis aspernatur praesentium mollitia illum atque,
            nulla enim minima quod unde ipsam dignissimos eum! Deserunt laborum similique voluptatibus alias vero totam,
            optio ducimus voluptatum nihil architecto cumque blanditiis, quaerat illo porro! Neque beatae pariatur fugit
            recusandae, numquam nihil!
        </div>
    </section>
    @yield('page_content')
@endsection
