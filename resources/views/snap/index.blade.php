
<x-app>
    <x-slot name="title">SnapVerse</x-slot>
    <h1 class="pt-5 pl-3 text-3xl">ALL CARDS</h1>
    <x-search-filter-bar>
        
    </x-search-filter-bar>
    <h3 class="pt-5 pl-3 text-2xl">Cards found: <b>{{$characters['total']}}</b></h3>
    <div class=" flex flex-wrap gap-y-2 gap-x-5 px-5 py-5 justify-center">

        @foreach ($characters['data'] as $character)

        <?php $extractedSpanText = getSpanTextFromAbility($character["ability"]);?>
        <?php $extractedRemainingText = getRemainingTextFromAbility($character["ability"]);?>
        <div>
        <x-card>
            <x-slot name="serie">{{$character['source_slug']}}'</x-slot>
            <x-slot name="url">{{$character['art']}}</x-slot>
            <x-slot name="cardName">{{$character['name']}}</x-slot>
            @if ($character['ability'] == null)
            <x-slot name="cardDescription">{{$character['flavor']}}</x-slot>
            <x-slot name="tag"></x-slot>
            @else
            @if ($extractedRemainingText == null)
            <x-slot name="cardDescription">{{$character['ability']}}</x-slot>
            @else
            <x-slot name="cardDescription">{{$extractedRemainingText}}</x-slot>
            @endif
            <x-slot name="tag">{{$extractedSpanText}}</x-slot>
            @endif

        </x-card>
        </div>
        @endforeach
    </div>

</x-app>

<!--https://marvelsnapzone.com/wp-content/themes/blocksy-child/assets/media/cards/abomination.webp?v=116 -->
<?php
function getSpanTextFromAbility($ability)
{
    if (strpos($ability, '<span>') !== false) { // Check if ability contains <span> tag
        preg_match('/<span>(.*?)<\/span>/', $ability, $matches);
        if (isset($matches[1])) {
            $spanText = $matches[1];
            return $spanText; // Return both values in an array
        }
    }
    return null; // Return null values if no match
}
function getRemainingTextFromAbility($ability) {
  if (strpos($ability, '<span>') !== false) { // Check if ability contains <span> tag
    preg_match('/<span>(.*?)<\/span>/', $ability, $matches);
    if (isset($matches[1])) {
      $remainingText = str_replace($matches[0], '', $ability);
      return $remainingText; // Return both values in an array
    }
  }
  return null; // Return null values if no match
}

?>

