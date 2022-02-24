<template>
  <div class="p-5 fs-5 flex space-x-8">
    <p class="mx-3" :class="[currentUrl==homeLink? 'border-b-4 border-primary':'']"><a href="/">HOME</a></p>
    <p class="mx-3" :class="[currentUrl==projectLink? 'border-b-4 border-primary':'']"><a href="/project/list">PROJECTS</a></p>
    <p class="mx-3" :class="[currentUrl==blogLink? 'border-b-4 border-primary':'']"><a href="/blog/list">BLOGS</a></p>
    <p class="mx-3" :class="[currentUrl==aboutLink? 'border-b-4 border-primary':'']"><a href="/about">ABOUT</a></p>
    <p class="mx-3" :class="[currentUrl==contactLink? 'border-b-4 border-primary':'']"><a href="/contact">CONTACT US</a></p>
    <p class="mx-3"><a href="/login">LOGIN</a></p>
  </div>
</template>
<script>
export default {
  data(){
    return{
      currentUrl:'',
      homeLink:'http://127.0.0.1:8000/',
      projectLink:'http://127.0.0.1:8000/project/list',
      blogLink:'http://127.0.0.1:8000/blog/list',
      aboutLink:'http://127.0.0.1:8000/about',
      contactLink:'http://127.0.0.1:8000/contact',
    }
  },
  mounted(){
    this.currentUrl=window.location.href;
  }
}
</script>