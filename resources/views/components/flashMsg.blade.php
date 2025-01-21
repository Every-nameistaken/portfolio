@props(['msg','bg'])
<div id="flash" class="py-3 w-100 text-light {{$bg}} text-center rounded-3" style="position: fixed;z-index:2;left:0%;">
    {{$msg}}
</div>
<script>
    let hideFlash =()=>{
        document.querySelector('#flash').style.display = 'none';
    }
gsap.to('#flash',{
    opacity:0,
    duration:8,
    ease:'power.out',
    onComplete:hideFlash,
});
</script>
