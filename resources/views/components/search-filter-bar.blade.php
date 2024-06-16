@extends('layouts/plantilla')


<div class="w-full flex justify-center pt-3">
    <div class="flex items-center w-3/4 bg-slate-600 rounded px-3 py-3">
        <form class="flex items-center max-w-sm mx-auto w-2/5" method="GET" action="{{route('snap.index')}}">
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                    </svg>
                </div>
                <input type="text" id="simple-search" name="search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 black:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search..." required/>
            </div>
            <div>
                <button type="submit" value="enviar"
                    class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </form>
        <div class="flex w-full pb-2 justify-center">
            <div class="w-1/5 flex flex-row items-center">
                <div class="pt-1">
                    <label for="underline_select" class="pr-2 text-white">Cost: </label>
                </div>
                <div>
                    <select id="underline_select"
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer pb-1">
                        <option value="costdesc">0-9⬇️</option>
                        <option value="costasc">0-9⬆️</option>
                    </select>
                </div>
            </div>
            <div class="w-1/5 flex flex-row items-center">
                <div class="pt-1">
                    <label for="underline_select" class="pr-2 text-white">Power: </label>
                </div>
                <div>
                    <select id="underline_select"
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer pb-1">
                        <option value="powerdesc">0-9⬇️</option>
                        <option value="powerasc" >0-9⬆️</option>
                    </select>
                </div>
            </div>
            <div class="w-1/5  flex flex-row items-center">
                <div class="pt-1">
                    <label for="underline_select" class="pr-2 text-white">Series: </label>
                </div>
                <div>
                    <select id="underline_select"
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer pb-1">
                        <option value="serie1">Series 1</option>
                        <option value="serie2">Series 2</option>
                        <option value="serie3">Series 3</option>
                        <option value="serie4">Series 4</option>
                        <option value="serie5">Series 5</option>
                    </select>
                </div>
            </div>

            <div class="w-1/4 flex flex-row items-center">
                <div class="pt-1">
                    <label for="underline_select" class="pr-2 text-white">Status: </label>
                </div>
                <div>
                    <select id="underline_select"
                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer pb-1">
                        <option value="released">Released</option>
                        <option value="unreleased">Unreleased</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="flex w-1/3 gap-1">
            <div class="w-1/2">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 border border-blue-700 rounded w-24">
                    Apply
                </button>
            </div>
            <div class="w-1/2">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 border border-blue-700 rounded w-24">
                    Add card
                </button>
            </div>
            <div class="w-1/2">
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-1 border border-red-700 rounded w-24">
                    Delete all
                </button>
            </div>
        </div>
    </div>
</div>
