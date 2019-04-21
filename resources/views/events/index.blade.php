@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (flash()->message)
                <div class="alert {{ flash()->class }}">
                    {{ flash()->message }}
                </div>
            @endif
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil cupiditate saepe nam laborum soluta quam dolorem quidem illum recusandae, quaerat dolorum iure dolor veritatis inventore nisi assumenda neque provident nemo possimus aliquam eius! Aliquam, quisquam impedit, consectetur unde a nesciunt saepe ullam cum soluta quo facilis! Possimus cumque aperiam velit qui. Ipsam nulla praesentium consectetur aliquid tenetur ducimus aspernatur, mollitia atque minus earum? Officiis voluptatem id dolorem libero adipisci non similique quidem, in quo! Earum similique molestiae eius rerum optio repudiandae? Iste porro voluptates veritatis quia nesciunt earum incidunt ipsam enim iure quis eum rerum facere in, sed, nostrum accusamus maiores fugiat! Eaque vitae explicabo enim earum consequuntur! Doloribus assumenda voluptatibus, ea nulla quam molestiae quaerat est, maxime illo id sapiente atque impedit? Numquam repellat necessitatibus, impedit obcaecati voluptatibus dignissimos doloribus. Facere dolores voluptates quisquam beatae veniam! Itaque quia ducimus neque perspiciatis accusamus. Necessitatibus officia qui quis, quaerat quisquam odit quod dolorem nemo ipsa soluta ducimus nesciunt accusamus excepturi perferendis perspiciatis rerum, illo mollitia reprehenderit, tempore accusantium obcaecati! Beatae ut omnis assumenda, placeat tempore cupiditate aut ad enim eaque adipisci dolorum quod odit odio asperiores. Id laboriosam modi quam laborum! Sed velit nam unde, error ad, architecto tempora omnis similique minima, veniam laudantium facilis saepe eligendi aliquam sit rerum ipsum enim qui impedit nisi. Sed, sunt quae excepturi dolorum ad eos officiis culpa consequatur corrupti magnam rerum quod explicabo repellendus quo non nisi pariatur a! Quod, autem laborum est nostrum nulla, vitae quos maiores sit eum deleniti aspernatur et quam!</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum eum, deserunt sunt debitis culpa molestiae, saepe facilis porro provident corporis quas nulla ipsa dolorum officiis magni veritatis dolore neque vitae fugit minus rerum molestias repellat quos? Quas, veritatis vitae ea nemo omnis accusamus odit natus quod, dolores earum distinctio reprehenderit veniam voluptatum a quis! Similique aspernatur voluptate ipsum sit! Sapiente, fugiat, hic ad aliquam commodi ducimus consequatur dolore repellat possimus nam harum adipisci odio aspernatur magni? Sunt rem cupiditate, facere reprehenderit et qui, nobis, cumque consequatur id culpa nihil aperiam aliquam veritatis iusto repellat autem! Libero, sapiente rem sit voluptatem dignissimos quasi alias mollitia? Fugit iure voluptas eius rerum dignissimos commodi distinctio asperiores. Aliquam minima iure quo sit. Praesentium consectetur adipisci tenetur labore consequuntur quos veritatis molestias dolor at, laborum maxime, quisquam quibusdam culpa illo enim soluta aspernatur aliquid iure impedit eius aliquam repudiandae. Libero error earum distinctio saepe ipsam! Dolorum voluptatum sed minus molestias soluta quidem totam ipsam voluptates harum consequatur voluptate incidunt, neque excepturi numquam in nobis ratione? Error nisi corrupti deleniti voluptas quisquam, facilis laboriosam modi doloribus quae debitis eum! Quae dolore natus tempora minima cupiditate expedita veniam eum, quisquam magni est beatae facilis ullam porro vitae praesentium nemo sit, odio temporibus ipsa blanditiis. Magni quasi voluptates eius quos molestiae doloribus quo, officiis esse? Quos consequatur laudantium excepturi animi voluptates natus! Voluptates aliquam tempora porro, voluptas culpa nesciunt sequi veniam cum ex distinctio, quidem nisi eaque aspernatur id pariatur quae tenetur voluptatum amet nam sit. Ut dolore aspernatur optio rem blanditiis earum voluptatem aliquam, corrupti nemo ad praesentium fuga aliquid possimus quia, cum debitis cupiditate? Ex officiis laboriosam omnis quos ut. Consectetur non quod temporibus aspernatur ducimus voluptates quos ad, amet veritatis et ex doloribus consequuntur laboriosam esse odit molestias inventore voluptatibus praesentium sit dolorem magnam? Repellat ipsam qui ducimus fugiat culpa autem nemo, neque tempora voluptas, veniam iste ut adipisci amet aliquam excepturi consectetur alias at deserunt recusandae quos modi laboriosam repudiandae? Laboriosam natus sit maiores, dicta quidem suscipit blanditiis, aperiam consectetur harum porro vitae molestias a asperiores temporibus non omnis soluta obcaecati iste nemo reiciendis, saepe quas at. Repellendus, incidunt pariatur? Quisquam cupiditate esse perferendis similique aspernatur temporibus nihil dolorum recusandae nisi minus maiores praesentium ducimus quidem voluptatum, suscipit cum assumenda nobis cumque ratione, autem fuga soluta architecto beatae. Quia alias nam consequuntur cumque quam at doloribus autem cupiditate hic fugit, ipsam libero nemo. Rem molestias veniam repellendus quod atque, consectetur odio dolores nesciunt officiis aperiam blanditiis dignissimos explicabo repellat magnam officia provident in, consequuntur libero cum pariatur nobis voluptatum facilis neque iure. Nemo laudantium reiciendis maiores ipsam! Dicta dolore tempore necessitatibus laudantium sed dolorum blanditiis sequi qui minus, iusto magni nihil, unde sapiente hic!</p>
        </div>
    </div>
    <div class="row">

        @foreach ($events as $event)

            <div class="col-md-4 revealFadeIn">
                <h3>{{ $event->date }}</h3>
                <img src="{{ $event->getFirstMediaUrl('images') }}" class="img-fluid" alt="">
                <h4>{{ $event->venue->name }}</h4>
                <h4>${{ money($event->ticket_price) }} - ${{ money($event->vip_price) }}</h4>
            </div>

        @endforeach

    </div>
</div>

@endsection

