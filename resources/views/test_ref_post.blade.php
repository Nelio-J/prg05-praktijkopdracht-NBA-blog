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
                <img src="{{ Vite::asset('/public/storage/PRG05_Hoop_Hub_Logo_V1_200px.png') }}"
                     alt="Hoop Hub website logo" width="200">
            </a>
        </div>

        <div>
            <a href="/" class="px-5 py-3 text-white">Login</a>

            <a href="#" class="px-5 py-3 text-white">Register</a>
        </div>
    </nav>

    <main class="max-w-7xl mt-7 mx-auto space-y-7">
        <article class="lg:grid-cols-2">
            <div>
                <a href="/" class="relative text-lg ml-7 px-7 py-1 border bg-gray-700 rounded-full text-white hover:bg-gray-600">< Back to home page</a>
            </div>

            <div class="p-7 lg:flex">
                <div class="flex-1 mr-3">
                    <img src="https://cdn.nba.com/manage/2023/06/lebron-passes-kareem.jpg" alt="Blog post thumbnail">

                    <div class="mt-2 flex items-center">
                        <img src="{{ Vite::asset('/public/storage/avatar_ein.png') }}" alt="Writer avatar"
                             class="w-12 h-12 rounded-full overflow-hidden">
                        <div class="ml-2">
                            <h4>Nelio Jarmohamed</h4>
                        </div>
                    </div>

                    <div class="mt-1">
                        <a href="#"
                           class="px-4 py-1 border bg-lakers-purple rounded-full text-lakers-gold text-xs uppercase font-semibold">Lakers</a>
                        <a href="#"
                           class="px-4 py-1 border border-red-600 rounded-full text-black text-xs uppercase font-semibold">Performance</a>
                    </div>
                </div>


                <div class="flex-1 flex flex-col justify-between">
                    <header>
                        <div>
                            <h1 class="text-2xl font-semibold mb-4">LeBron passes Kareem as all-time leading scorer</h1>
                        </div>
                    </header>

                    <div class="text-sm space-y-6">
                        <p>The burning question entering Tuesday’s contest between the Lakers and the Thunder was
                            whether LeBron James could score the 36 points he needed to finally break Kareem
                            Abdul-Jabbar’s career NBA scoring record.</p>
                        <p>In true LeBron fashion, he didn’t even need a full game.</p>
                        <p>James sank a 21-foot turnaround with 10.9 seconds left in the third quarter at Crypto.com
                            Arena, giving him 16 points in the period, the necessary 36 for the game and 38,388 for his
                            illustrious career — now more than any other player in NBA history.</p>
                        <p>LeBron James: Making History
                        <p>“I never thought anybody could beat Kareem’s record,” Magic Johnson said during a
                            congratulatory clip, speaking for most NBA observers.</p>
                        <p>That includes James, who said in the run-up to Tuesday’s game that he never seriously
                            contemplated besting Abdul-Jabbar’s record until recently given how unreachable it felt.</p>
                        <p>But James, who also played multiple stints in Cleveland bracketing a stretch in Miami, has
                            followed the same path as his fellow Lakers star with consistent, high-level excellence and
                            historic longevity. With double-figure points in all but eight career games, and scoring
                            averages of at least 25 points per game in all 19 seasons since his rookie campaign in
                            2003-04, James consistently chipped away at the standard Abdul-Jabbar initially set in 1984
                            and continued to build on until his retirement in 1989.</p>
                        <p>“Congratulations to LeBron on breaking one of the most hallowed records in all of sports by
                            becoming the NBA’s all-time scoring leader,” NBA commissioner Adam Silver said via
                            statement. “It’s a towering achievement that speaks to his sustained excellence over 20
                            seasons in the league. And quite amazingly, LeBron continues to play at an elite level and
                            his basketball history is still being written.”</p>
                    </div>


                </div>
            </div>
        </article>
    </main>

    <footer class="bg-gray-900 border border-black border-opacity-5 mt-7 px-7 py-4">
        <h5 class="text-white">©Hoop Hub, LLC. All rights reserved.</h5>
    </footer>
</section>
</html>
