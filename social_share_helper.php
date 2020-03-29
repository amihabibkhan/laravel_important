// we can use these functions to make link to share in facebook, twitter and mail
// in laravel we can define these in helpers.php

function fb_share($link){
    return "https://www.facebook.com/sharer/sharer.php?{$link};src=sdkpreparse";
}
function twitter_share($link){
    return "https://twitter.com/share?ref_src={$link}";
} 
function share_to_mail($subject, $link){
    return "mailto:?subject={$subject}&body={$link}";
}

// blade format
<a href="{{ share_to_mail('Life of Hamid Sirajy', route('lifePage')) }}"><i class="fas fa-envelope"></i></a>
