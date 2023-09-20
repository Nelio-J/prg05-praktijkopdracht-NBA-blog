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

            <div class="flex-wrap justify-center mt-4 space-x-8 inline-flex">
                <span class="relative bg-gray-200 rounded-s inline-flex items-center">
                    <label for="teams">Teams:</label>
                    <select name="teams" id="teams" class="appearance-none bg-transparent py-2 px-5 text-sm font-semibold">

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
                    <img src="{{ Vite::asset('/public/storage/dropdown_arrow.png') }}" alt="Dropdown menu" width="19" height="19" style="position: absolute; right: 12px; pointer-events: none">
                </span>

                <div class="flex-wrap justify-center space-x-8 inline-flex">
                    <span class="relative bg-gray-200 rounded-s inline-flex items-center py-2 px-4">
                        <form method="GET" action="#">
                            <label for="search"></label>
                            <input type="text" name="search" id="search" placeholder="Search" class="bg-transparent placeholder-black text-sm font-semibold">
                        </form>
                    </span>
                </div>
            </div>
        </div>
    </header>

    <main></main>

    <footer></footer>
</section>
</html>
