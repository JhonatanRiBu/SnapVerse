@extends('layouts/plantilla')
<div class="mx-auto border-2  shadow-2xl basis-1/6 h-96">
    <div class="text-center ">
      <div class="mt-2 rounded bg-slate-300 shadow-2xl py-2">
        <input type="button" value={{$serie ?? 'Serie #'}} class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-3 py-0.5 rounded">
      </div>
      <div class=" pb-1 flex justify-center">
        <img src={{$url}} width="200" height="250">
      </div>
      <div class="pb-1">
        <h3 class="text-xm text-gray-600"><b>{{$cardName}}</b></h3>
      </div>
      <div>
        <p class="text-xs px-5 max-w-52"><span><b>{{$tag}}</b></span> {{$cardDescription}}</p>
      </div>
    </div>

</div>


