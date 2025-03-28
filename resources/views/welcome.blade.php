<x-layouts.base title="Welcome to the Italian Society of Savannah">
    <div class="flex h-full w-full flex-1 flex-col gap-6 px-4 py-8 md:px-8">
        {{-- HERO SECTION --}}
        <div class="grid auto-rows-min gap-6 md:grid-cols-2 items-center">
            <div class="relative aspect-video overflow-hidden rounded-lg p-6 flex flex-col justify-center">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('storage/crest.png') }}" alt="Italian Society of Savannah Crest"
                        class="h-20 md:h-24">
                </div>
                <h1 class="font-header text-3xl md:text-5xl font-bold text-gray-800 text-center mb-4">
                    Italian Society of Savannah
                </h1>
                <h3 class="font-sans text-lg md:text-xl text-gray-800 text-center mb-24">
                    To cherish the recollections of our homes and the birthplace of ourselves and our forefathers...
                </h3>
            </div>
            <div class="relative aspect-video overflow-hidden rounded-lg flex items-center justify-center">

                <div class=" text-center text-white p-6 z-10">
                    <p class="font-sans text-3xl text-green-900 mb-4">Become part of our legacy.</p>
                    <a href="/membership"
                        class="inline-block bg-red-800 text-xl text-white font-sans px-6 py-3 rounded-lg hover:bg-amber-800 transition">
                        Join Today
                    </a>
                </div>
            </div>
        </div>

        {{-- ABOUT SECTION --}}
        <div class="text-center py-8 max-w-4xl mx-auto">
            <h2 class="font-header text-3xl md:text-4xl text-gray-800 mb-4">Our Heritage, Our Community</h2>
            <p class="font-sans text-lg text-gray-800">
                The Italian Society of Savannah unites those of Italian descent and admirers of Italian culture in a
                shared mission to preserve our storied past. From our roots in Savannah’s rich history to our vibrant
                present, we foster fellowship, celebrate tradition, and honor the contributions of Italians in our
                adopted home.
            </p>
            <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6">
                <div class="flex-shrink-0">
                    <img src="{{ asset('storage/president-bryan-schivera.png') }}" alt="President Bryan Schivera"
                        class="h-40 w-40 md:h-60 md:w-60 rounded-full border-2 border-amber-600 object-cover">
                </div>
                <div class="text-left max-w-lg">
                    <div class="font-header text-xl md:text-2xl text-gray-800 mb-2 font-black">From Our President, Bryan
                        Schivera
                    </div>
                    <p class="font-sans text-base text-gray-800">
                        "As President, my mission is to strengthen the bonds of our Italian heritage here in
                        Savannah."
                    </p>
                </div>
            </div>
        </div>

        {{-- EVENTS OVERVIEW --}}
        <div class="relative flex-1 bg-gray-200 rounded-lg p-6">
            <h2 class="font-header text-3xl md:text-4xl text-gray-800 text-center mb-6">Events & Traditions</h2>
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <div class="bg-white p-4 rounded-lg shadow-md border border-amber-600">
                    <h3 class="font-header text-xl text-gray-800 mb-2">Columbus Day Banquet</h3>
                    <p class="font-sans text-base text-gray-800">
                        A black-tie October gala featuring notable Italian-American speakers, fine dining, and a
                        celebration of our heritage.
                    </p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md border border-amber-600">
                    <h3 class="font-header text-xl text-gray-800 mb-2">Festa Primavera</h3>
                    <p class="font-sans text-base text-gray-800">
                        Our spring social in late April or early May, offering a relaxed evening of food, wine, and
                        Savannah skyline views.
                    </p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md border border-amber-600">
                    <h3 class="font-header text-xl text-gray-800 mb-2">Scholarship Contest</h3>
                    <p class="font-sans text-base text-gray-800">
                        The Frank Finocchiaro Memorial awards $1,000 scholarships to local students for exceptional
                        essays.
                    </p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md border border-amber-600">
                    <h3 class="font-header text-xl text-gray-800 mb-2">Quarterly Dinners</h3>
                    <p class="font-sans text-base text-gray-800">
                        Three dinner meetings each year to connect members over excellent cuisine and fellowship.
                    </p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md border border-amber-600">
                    <h3 class="font-header text-xl text-gray-800 mb-2">Ad Hoc Events</h3>
                    <p class="font-sans text-base text-gray-800">
                        Golf tournaments, holiday dinners, and more casual gatherings throughout the year.
                    </p>
                </div>
            </div>
            <div class="text-center mt-6">
                <a href="/events"
                    class="inline-block bg-green-900 text-white font-sans px-6 py-3 rounded-lg hover:bg-red-800 transition">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</x-layouts.base>