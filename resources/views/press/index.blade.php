<ul>
@foreach($data as $post)

        <li type="disc">
            <img src="/storage/{{$post->imagepath}}" alt="">
            <form action="/admin/press/{{$post->id}}" method="POST">
                @csrf
                {{method_field('DELETE')}}
                <button type="submit">Delete</button>
            </form>

        </li>

@endforeach
</ul>


<a href="/admin/press/create">Add new</a>

{{--@foreach($data as $post)--}}
{{----}}
{{--<a class="admin-link" href="/admin/team/{{$post->id}}">--}}
{{----}}
{{--<div class="item mb-5">--}}
{{----}}
{{--<h3>{{$post->name}}</h3>--}}
{{--<div class="link-list">--}}
{{----}}
{{--</div>--}}
{{----}}

{{--<div class="columns is-vcentered">--}}
{{--<div class="column is-11">--}}

{{----}}
{{--</div>--}}
{{--<div class="column">--}}
{{--<span class="status icon p-4">--}}
{{--<i class="fas fa-circle text-green-500"></i>--}}
{{--</span>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</a>--}}

{{--@endforeach--}}

{{--@foreach($data as $post)--}}
{{----}}
{{--<a class="admin-link" href="/admin/team/{{$post->id}}">--}}
{{----}}
{{--<div class="item mb-5">--}}
{{----}}
{{--<h3>{{$post->name}}</h3>--}}
{{--<div class="link-list">--}}
{{----}}
{{--</div>--}}
{{----}}

{{--<div class="columns is-vcentered">--}}
{{--<div class="column is-11">--}}

{{----}}
{{--</div>--}}
{{--<div class="column">--}}
{{--<span class="status icon p-4">--}}
{{--<i class="fas fa-circle text-green-500"></i>--}}
{{--</span>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</a>--}}

{{--@endforeach--}}