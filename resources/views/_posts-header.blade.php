<header class="mt-7 px-7">
    <div class="max-w-4xl">
        <h1 class="text-3xl">
            Latest news
        </h1>

        <div class="flex-wrap mt-4 lg:space-x-8 inline-flex">
                <span class="relative bg-gray-200 rounded-s flex lg:inline-flex items-center">
                    <label for="tag-1">Teams:</label>
                    <select name="teams" id="tag-1" class="appearance-none bg-transparent py-2 px-5 text-sm font-semibold">

                        <?php //Replace values with database content ?>

                        <option value="Category" disabled selected hidden>Select</option>
                        <option value="Atlanta Hawks">Atlanta Hawks</option>
                        <option value="Boston Celtics">Boston Celtics</option>
                        <option value="Brooklyn Nets">Brooklyn Nets</option>
                        <option value="Charlotte Hornets">Charlotte Hornets</option>
                        <option value="Chicago Bulls">Chicago Bulls</option>
                        <option value="Cleveland Cavaliers">Cleveland Cavaliers</option>
                        <option value="Dallas Mavericks">Dallas Mavericks</option>
                        <option value="Denver Nuggets">Denver Nuggets</option>
                        <option value="Detroit Pistons">Detroit Pistons</option>
                        <option value="Golden State Warriors">Golden State Warriors</option>
                        <option value="Houston Rockets">Houston Rockets</option>
                        <option value="Indiana Pacers">Indiana Pacers</option>
                        <option value="Los Angeles Clippers">Los Angeles Clippers</option>
                        <option value="Los Angeles Lakers">Los Angeles Lakers</option>
                        <option value="Memphis Grizzlies">Memphis Grizzlies</option>
                        <option value="Miami Heat">Miami Heat</option>
                        <option value="Milwaukee Bucks">Milwaukee Bucks</option>
                        <option value="Minnesota Timberwolves">Minnesota Timberwolves</option>
                        <option value="New Orleans Pelicans">New Orleans Pelicans</option>
                        <option value="New York Knicks">New York Knicks</option>
                        <option value="Oklahoma City Thunder">Oklahoma City Thunder</option>
                        <option value="Orlando Magic">Orlando Magic</option>
                        <option value="Philadelphia 76ers">Philadelphia 76ers</option>
                        <option value="Phoenix Suns">Phoenix Suns</option>
                        <option value="Portland Trail Blazers">Portland Trail Blazers</option>
                        <option value="Sacramento Kings">Sacramento Kings</option>
                        <option value="San Antonio Spurs">San Antonio Spurs</option>
                        <option value="Toronto Raptors">Toronto Raptors</option>
                        <option value="Utah Jazz">Utah Jazz</option>
                        <option value="Washington Wizards">Washington Wizards</option>
                    </select>
                    <img src="{{ Vite::asset('/public/storage/dropdown_arrow.png') }}" alt="Dropdown menu" width="19" height="19" class="pointer-events-none absolute right-2">
                </span>

            <span class="relative bg-gray-200 rounded-s hover:bg-gray-400 flex lg:inline-flex py-2 px-4">
                    <input class="btn-check tag-input" name="tags[]" type="checkbox" id="tag-2" value="Performance" autocomplete="off">
                    <label class="btn btn-secondary" for="tag-2">Performance</label>
                </span>

            <span class="flex-wrap relative bg-gray-200 rounded-s flex lg:inline-flex py-2 px-4">
                        <form method="GET" action="#">
                            <label for="search"></label>
                            <input type="text" name="search" id="search" placeholder="Search" class="bg-transparent placeholder-black text-sm font-semibold">
                        </form>
                </span>
        </div>
    </div>
</header>
