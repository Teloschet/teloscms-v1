<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>

            <div class="news">
                <h1>Last Notices</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="updates">
                <h1>Last Updates</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
.news {
    margin-top:15px;
    background: #fff;
    border-radius:5px;
    box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.1);
    width:40%;
    height:150px;
}

.news > h1 {
    color:#333;
    font-size: 24px;
    position:relative;
    top:15px;
    left:30px;
}

.news > p {
    position:relative;
    top:20px;
    left:30px;
    width:400px;
    text-align:justify;
    color:#333;
}

.updates {
    margin-top:15px;
    background: #fff;
    border-radius:5px;
    box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.1);
    width:59%;
    height:150px;
    position:relative;
    float:right;
    margin-top:-150px;
}
.updates > h1 {
    color:#333;
    font-size: 24px;
    position:relative;
    top:15px;
    left:30px;
}

.updates > p {
    position:relative;
    top:20px;
    left:30px;
    width:650px;
    text-align:justify;
    color:#333;
}
</style>