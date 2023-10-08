{{--<a href="/categories/{{$post->category->name}}"--}}
{{--   class="tw-px-4 tw-py-1 tw-border tw-bg-lakers-purple tw-rounded-full tw-text-lakers-gold tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>--}}

{{--<a href="#"--}}
{{--   class="tw-px-4 tw-py-1 tw-border tw-border-red-600 tw-rounded-full tw-text-black tw-text-xs tw-uppercase tw-font-semibold">Performance</a>--}}

@if($post->category->name === 'Atlanta Hawks')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-hawks-red tw-text-amber-400 tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Boston Celtics')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-celtics-green tw-text-white tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Brooklyn Nets')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-nets-black tw-text-white tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Charlotte Hornets')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-hornets-teal tw-text-white tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Chicago Bulls')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-bulls-red tw-text-black tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Cleveland Cavaliers')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-cavaliers-wine tw-text-cavaliers-gold tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Dallas Mavericks')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-mavericks-blue tw-text-gray-300 tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Denver Nuggets')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-nuggets-blue tw-text-nuggets-yellow tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Detroit Pistons')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-pistons-royal tw-text-pistons-red tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Golden State Warriors')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-warriors-blue tw-text-warriors-yellow tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Houston Rockets')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-rockets-red tw-text-white tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Indiana Pacers')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-pacers-yellow tw-text-blue-950 tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Los Angeles Clippers')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-clippers-red tw-text-blue-800 tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Los Angeles Lakers')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-lakers-purple tw-text-lakers-gold tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Memphis Grizzlies')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-grizzlies-blue tw-text-blue-950 tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Miami Heat')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-heat-red tw-text-amber-500 tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Milwaukee Bucks')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-bucks-green tw-text-yellow-100 tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Minnesota Timberwolves')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-timberwolves-blue tw-text-lime-500 tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'New Orleans Pelicans')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-blue-950 tw-text-pelicans-gold tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'New York Knicks')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-knicks-blue tw-text-knicks-orange tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Oklahoma City Thunder')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-thunder-blue tw-text-orange-600 tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Orlando Magic')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-magic-blue tw-text-zinc-300 tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Philadelphia 76ers')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-76ers-blue tw-text-76ers-red tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Phoenix Suns')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-violet-950 tw-text-suns-orange tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Portland Trailblazers')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-trailblazers-red tw-text-black tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Sacramento Kings')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-kings-purple tw-text-gray-500 tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'San Antanio Spurs')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-spurs-silver tw-text-black tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Toronto Raptors')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-black tw-text-raptors-red tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Utah Jazz')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-jazz-green tw-text-yellow-500 tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@elseif($post->category->name === 'Washington Wizards')
    <a href="{{ route('posts') }}?category={{$post->category->slug}}"
       class="tw-px-4 tw-py-1 tw-border tw-rounded-full tw-bg-wizards-blue tw-text-wizards-red tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>
@endif

{{--<a href="/categories/{{$post->category->name}}"--}}
{{--   class="tw-px-4 tw-py-1 tw-border tw-rounded-full {{$tag_layout}} tw-text-xs tw-uppercase tw-font-semibold">{{$post->category->name}}</a>--}}
