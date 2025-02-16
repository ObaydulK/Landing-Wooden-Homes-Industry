@extends('layout.app');
@section('content')
  {{-- this is the banner sction --}}
  <div class="w-full h-screen bg-black overflow-x-hidden">
    <div
    class="w-full mx-auto relative bg-[url('https://i.ibb.co.com/tMDKwZ60/Whats-App-Image-2025-02-16-at-12-18-39-PM-1.jpg')] bg-cover bg-no-repeat sm:aspect-video ">
    <div
      class="absolute md:-top-24 md:-right-32 sm:-right-[7rem] -right-[1rem] top-0 opacity-30 w-[15%] h-[20%] gradiant rounded-full blur-3xl">
    </div>
    <div
      class="absolute md:-left-[45%] sm:-left-[42%] -left-[40%] opacity-10 w-[50%] h-full my-auto bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full blur-3xl">
    </div>
    {{--
    <div class="w-[80%] mx-auto h-full flex justify-between items-center">
      <div class="h-full xl:w-[50%] md:w-[60%] sm:w-[70%] w-full text-white flex flex-col gap-2 justify-center">
      <h1 class="xl:text-7xl lg:text-6xl md:text-5xl text-4xl font-semibold">Our Crafted Wooden House is <br> sthe
        future of <span>Morden design</span></h1>
      <h1 class="xl:text-7xl lg:text-6xl md:text-5xl text-4xl font-semibold bg-text">Samuel Abera!</h1>
      <!--  -->
      <p class="lg:text-3xl sm:text-xl text-lg lg:my-6 my-2">I am Experienced full-stack developer with 4+
        years of
        expertise in Laravel, NestJS, Nuxt.js, Next.js, Android, and some Flutter experience.</p>

      <!-- Buttons -->
      <div class="flex sm:flex-row flex-col gap-4 lg:mt-4 mt-2">
        <button
        class="md:px-8 px-4 md:py-4 py-2 md:text-xl text-lg font-semibold rounded-md gradiant cursor-pointer">Click
        For Hire Me</button>
        <button
        class="md:px-8 px-4 md:py-4 py-2 md:text-xl text-lg font-semibold outline outline-2  rounded-md cursor">About
        Me</button>
      </div>
      </div>
      <div></div>
    </div> --}}
    </div>
  </div>


  {{-- Welcome to leading wooden homes industry --}}
<div class=" container m-auto">
  <div class="flex gird-col md:grid-row items-center p-6 bg-background rounded-lg shadow-lg">
    <div class="md:w-[50%]">
    <img
      src="https://i.ibb.co.com/7NCN86Fj/Screenshot-2025-02-16-at-14-51-50-Leading-Wooden-Homes-Industry-pdf-removebg-preview.png"
      alt="Wooden Home" class="rounded-lg shadow-md" />
    </div>
    <div class="md:w-[50%] md:pl-6">
    <h1 class="text-3xl font-bold text-primary">Welcome To <span class="text-accent text-red-500">Leading Wooden Homes
      Industry</span></h1>
    <p class="mt-4 text-muted-foreground justify-between">
      Canadian craft founder by Mr. Kuljeet Kahl in the year 2018. Since our establishment our goal has been to provide
      our customers with our quality services & provider with premium quality
      eco-friendly wooden homes, that are at par with the best in the world. With our decades of experience & refined
      expertise, we at Canadian craft provide our clients with a selection of log homes
      to the best of their satisfaction. We build homes, tree houses and resorts that are energy efficient, made from
      the finest pine wood sourced directly from Germany, Russia, USA and Canada. We
      deliver excellence.
    </p>
    <a href="#"
      class="mt-6 inline-block bg-secondary text-secondary-foreground hover:bg-secondary/80 py-2 px-4 rounded-lg shadow text-red-500">Read
      More</a>
    </div>
  </div>
</div>
  {{-- Our projects part --}}
  <div class="container m-auto">

    <section id="features" class="relative block px-6 py-10 md:py-20 md:px-10  border-t border-b border-neutral-900 ">
    <h2 class=" w-full text-center text-3xl sm:text-4xl font-bold">Our <span class="text-red-600">Project</span> </h2>
    <div class="relative mx-auto max-w-5xl text-center">
      <h2 class="block w-full text-black font-bold text-transparent ">
      Our Projects
      </h2>
    </div>
    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 ">
      <div>
      <img src="https://i.ibb.co.com/h6W1Xwq/chandiga.jpg" alt="">
      <h1>Chandiga</h1>
      </div>
      <div>
      <img src="https://i.ibb.co.com/QvpNDK5V/jaipur.jpg" alt="">
      <h1>Chandiga</h1>
      </div>
      <div>
      <img src="https://i.ibb.co.com/Xx7qVdZx/Nainital.jpg" alt="">
      <h1>Chandiga</h1>
      </div>
    </div>
    </section>
  </div>

  {{-- How to connect with our architech? --}}
  <section class="px-8 py-24">
    <div class="container mx-auto text-center">
    <h2
      class="block antialiased tracking-normal font-sans text-4xl font-semibold leading-[1.3] text-blue-gray-900 mb-4">
      HOw to Connect With <span class="text-red-500">Our Architech?</span></h2>

    </div>
    <div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="bg-card p-6 rounded-lg  ">
      <img aria-hidden="true" alt="Client Consultation" class="w-full h-[70%]"
        src="https://i.ibb.co.com/mrgR0TBj/Screenshot-2025-02-16-at-15-37-24-Leading-Wooden-Homes-Industry-pdf.png" />
      <h3 class="text-xl font-semibold mt-4">Client Consultation</h3>
      <p class="text-muted-foreground mt-2">Our team visits your location to discuss your requirements, expectations,
        design ideas, and budget, ensuring we fully understand your vision.</p>
      </div>
      <div class="bg-card p-6 rounded-lg  ">
      <img aria-hidden="true" alt="Design and Floor Plan Presentation" class="w-full h-[70%]"
        src="https://i.ibb.co.com/j910wsz3/Screenshot-2025-02-16-at-15-43-04-Leading-Wooden-Homes-Industry-pdf.png" />
      <h3 class="text-xl font-semibold mt-4">Design and Floor Plan Presentation</h3>
      <p class="text-muted-foreground mt-2">We share reference designs for wooden resorts, including detailed floor
        plans and 3D drawings, to give you a clear picture of the project.</p>
      </div>


      <div class="bg-card p-6 rounded-lg ">
      <img aria-hidden="true" alt="Materials & Specifications" class="w-full h-[70%]"
        src="https://i.ibb.co.com/QjPF0fzf/Screenshot-2025-02-16-at-15-43-54-Leading-Wooden-Homes-Industry-pdf.png" />
      <h3 class="text-xl font-semibold mt-4">Materials & Specifications</h3>
      <p class="text-muted-foreground mt-2">We work with you to select the perfect materials-laminates, veneers, metal
        strips, glass, paints, and fabrics-to bring your design to life.</p>
      </div>
      <div class="bg-card p-6 rounded-lg  ">
      <img aria-hidden="true" alt="Execution & Delivery" class="w-full h-[70%]"
        src="https://i.ibb.co.com/cXMq0kZk/Screenshot-2025-02-16-at-15-43-42-Leading-Wooden-Homes-Industry-pdf.png" />
      <h3 class="text-xl font-semibold mt-4">Execution & Delivery</h3>
      <p class="text-muted-foreground mt-2">
        Our team manages the entire construction process, from material procurement to the smooth coordination of
        skilled professionals, ensuring your project is completed on time and to the highest
        standards.
      </p>
      </div>
    </div>
    </div>
  </section>



  {{-- Clients Review --}}


  <div class="container m-auto">
    <h2 class="text-3xl font-bold text-primary mb-4">Our <span class="text-red-500">Happy</span> Clients</h2>
    <div class=" w-full bg-[url('https://i.ibb.co.com/zVFdCpZ3/Whats-App-Image-2025-02-16-at-12-18-37-PM.jpg')]">

    <div class="p-6  rounded-lg shadow-md">
      <div class="flex gap-6">
      <div class="bg-white w-[300px] rounded-lg p-4 shadow">
        <div class="flex items-center mb-2">
        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
        </div>
        <p class="text-muted-foreground mb-2">
        Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One
        day however a small line of blind text by the name of Lorem Ipsum decided to leave
        for the far World of Grammar. The Big Oxmox advised her.
        </p>
        <div class="flex items-center">
        <img aria-hidden="true" alt="Shams W.Pawel" src="https://openui.fly.dev/openui/24x24.svg?text=👤"
          class="w-10 h-10 rounded-full mr-2" />
        <span class="font-semibold">Shams W.Pawel</span>
        </div>
      </div>
      <div class="bg-white w-[300px] rounded-lg p-4 shadow">
        <div class="flex items-center mb-2">
        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
        </div>
        <p class="text-muted-foreground mb-2">
        Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One
        day however a small line of blind text by the name of Lorem Ipsum decided to leave
        for the far World of Grammar. The Big Oxmox advised her.
        </p>
        <div class="flex items-center">
        <img aria-hidden="true" alt="Shams W.Pawel" src="https://openui.fly.dev/openui/24x24.svg?text=👤"
          class="w-10 h-10 rounded-full mr-2" />
        <span class="font-semibold">Shams W.Pawel</span>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>


  {{-- This is timber house Resorts --}}
  <div class="bg-background p-8">
    <h1 class="text-4xl font-bold text-red-600 text-center mb-4">Timber <span class="text-black">House Resorts</span></h1>
    <div class="flex justify-center space-x-8">
    <div class="text-center">
      <img aria-hidden="true" alt="Uttarakhand"
      src="https://i.ibb.co.com/B7CDqxV/Whats-App-Image-2025-02-16-at-12-18-29-PM-2.jpg"
      class="rounded-full w-[300px] h-[300px]" />
      <p class="text-muted-foreground mt-2 text-3xl font-bold text-red-500">Uttarakhand</p>
    </div>
    <div class="text-center">
      <img aria-hidden="true" alt="Himachal Pradesh"
      src="https://i.ibb.co.com/Lzh44qJh/Whats-App-Image-2025-02-16-at-12-18-30-PM.jpg"
      class="rounded-full w-[300px] h-[300px]" />
      <p class="text-muted-foreground mt-2 text-3xl font-bold text-red-500">Himachal Pradesh</p>
    </div>
    <div class="text-center">
      <img aria-hidden="true" alt="Goa"
      src="https://i.ibb.co.com/S776x8Bg/Whats-App-Image-2025-02-16-at-12-18-31-PM-1.jpg"
      class="rounded-full w-[300px] h-[300px]" />
      <p class="text-muted-foreground mt-2 text-3xl font-bold text-red-500">Goa</p>
    </div>
    <div class="text-center">
      <img aria-hidden="true" alt="Jammu & Kashmir"
      src="https://i.ibb.co.com/9998M5zc/Whats-App-Image-2025-02-16-at-12-18-33-PM-1.jpg"
      class="rounded-full w-[300px] h-[300px]" />
      <p class="text-muted-foreground mt-2 text-3xl font-bold text-red-500">Jammu & Kashmir</p>
    </div>
    <div class="text-center">
      <img aria-hidden="true" alt="Uttarakhand"
      src="https://i.ibb.co.com/8DVLS1HC/Whats-App-Image-2025-02-16-at-12-18-33-PM.jpg"
      class="rounded-full w-[300px] h-[300px]" />
      <p class="text-muted-foreground mt-2 text-3xl font-bold text-red-500">Uttarakhand</p>
    </div>
    </div>
  </div>


  {{-- This par Why Chose Woodn Housing --}}

  <div class="container m-auto">
    <div>
    <div class="text-center py-10">
      <h2 class="text-3xl font-bold text-black ">Why Choose <span class="text-red-600">Wooden Housing?</span></h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">
      <div class="bg-card p-6 rounded-lg shadow-md">
        <img aria-hidden="true" alt="personalised-designs" src="" class="" />
        <h3 class="text-lg font-semibold mt-4">Personalised Designs</h3>
        <p class="text-muted-foreground">Customize wooden design built just for you.</p>
      </div>
      <div class="bg-card p-6 rounded-lg shadow-md">
        <img aria-hidden="true" alt="technical-assistance" src="" class="" />
        <h3 class="text-lg font-semibold mt-4">100% Technical Assistance</h3>
        <p class="text-muted-foreground">Expert support from start to finish.</p>
      </div>
      <div class="bg-card p-6 rounded-lg shadow-md">
        <img aria-hidden="true" alt="affordable-cost" src="" class="" />
        <h3 class="text-lg font-semibold mt-4">Affordable Cost</h3>
        <p class="text-muted-foreground">Quality design within your budget.</p>
      </div>
      <div class="bg-card p-6 rounded-lg shadow-md">
        <img aria-hidden="true" alt="warranty" src="" class="" />
        <h3 class="text-lg font-semibold mt-4">3 Years Warranty</h3>
        <p class="text-muted-foreground">Long-term protection for your investment.</p>
      </div>
      </div>
    </div>
    </div>
  </div>


@endsection