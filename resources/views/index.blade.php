<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Welcome</title>
</head>

<section class="font-roboto">
    <nav class="flex justify-between items-center bg-gray-900 px-7 py-4">
        <div>
            <a href="/">
                <img src="{{ Vite::asset('/public/storage/PRG05_Hoop_Hub_Logo_V1_200px.png') }}" alt="Hoop Hub website logo" width="200">
            </a>
        </div>

        <div>
            <a href="/" class="px-5 py-3 text-white">Login</a>

            <a href="#" class="px-5 py-3 text-white">Register</a>
        </div>
    </nav>

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

    <main class="max-w-7xl mt-7 px-7 mx-auto space-y-7">
        <article class="bg-gray-200 hover:bg-gray-500 rounded-xl">
            <div class="p-7 lg:flex">
                <div class="flex-1 mr-3">
                    <img src="https://cdn.nba.com/manage/2023/06/lebron-passes-kareem.jpg" alt="Blog post thumbnail">
                </div>

                <div class="flex-1 flex flex-col justify-between">
                    <header>
                        <div>
                            <h1 class="text-2xl font-semibold">LeBron passes Kareem as all-time leading scorer</h1>
                        </div>
                    </header>

                    <div class="text-sm">
                        <p>Eleatess credere in fidelis quadrata!</p>
                    </div>

                    <div class="mb-2">
                        <a href="#" class="px-4 py-1 border bg-black rounded-full text-white text-xs uppercase font-semibold">Read</a>
                    </div>

                    <footer class="mt-7">
                        <div class="flex items-center text-sm">
                            <img src="{{ Vite::asset('/public/storage/avatar_ein.png') }}" alt="Writer avatar" class="relative w-12 h-12 rounded-full overflow-hidden">
                            <div class="ml-2">
                                <h4>Nelio Jarmohamed</h4>
                            </div>
                        </div>

                        <div class="mt-1">
                            <a href="#" class="px-4 py-1 border bg-lakers-purple rounded-full text-lakers-gold text-xs uppercase font-semibold">Lakers</a>
                            <a href="#" class="px-4 py-1 border border-red-600 rounded-full text-black text-xs uppercase font-semibold">Performance</a>
                        </div>
                    </footer>
                </div>
            </div>
        </article>

        <article class="bg-gray-200 hover:bg-gray-500 rounded-xl">
            <div class="p-7 lg:flex">
                <div class="flex-1 mr-3">
                    <img src="https://cdn.nba.com/manage/2023/08/sengun-green-sidelines-1568x882.jpg" alt="Blog post thumbnail">
                </div>

                <div class="flex-1 flex flex-col justify-between">
                    <header>
                        <div>
                            <h1 class="text-2xl font-semibold">Rockets look to take next step as rebuild continues</h1>
                        </div>
                    </header>

                    <div class="text-sm">
                        <p>Eleatess credere in fidelis quadrata!</p>
                    </div>

                    <div class="mb-2">
                        <a href="#" class="px-4 py-1 border bg-black rounded-full text-white text-xs uppercase font-semibold">Read</a>
                    </div>

                    <footer class="mt-7">
                        <div class="flex items-center text-sm">
                            <img src="{{ Vite::asset('/public/storage/avatar_ein.png') }}" alt="Writer avatar" class="relative w-12 h-12 rounded-full overflow-hidden">
                            <div class="ml-2">
                                <h4>Nelio Jarmohamed</h4>
                            </div>
                        </div>

                        <div class="mt-1">
                            <a href="#" class="px-4 py-1 border bg-rockets-red rounded-full text-white text-xs uppercase font-semibold">Rockets</a>
                            <a href="#" class="px-4 py-1 border bg-amber-50 rounded-full text-black text-xs uppercase font-semibold">General News</a>
                        </div>
                    </footer>
                </div>
            </div>
        </article>
    </main>

    <footer class="bg-gray-900 border border-black border-opacity-5 mt-7 px-7 py-4">
        <h5 class="text-white">©Hoop Hub, LLC. All rights reserved.</h5>
    </footer>
</section>
</html>
