@extends('frontend.layouts.app')
@include('frontend.layouts.header')

<!-- <body>
    <main class="container">
        <section class="breadcrumb">
            <a href="/" class="breadcrumb__link">Home</a>
            <a href="#" class="breadcrumb__link">Blog</a>
            <a href="#" class="breadcrumb__link">How to enhance motivation for better business leads?</a>
        </section>

        @foreach ($posts as $key => $post)
            <article class="blog">
                <div class="blog__img">
                    <img src="{{ asset('post/images/' . $post->image) }}" alt="" />
                </div>
                <h3>{{ $post->title }}</h3>
                <div class="blog__meta">
                    <div class="blog__by"><span>by</span> <strong>{{ $post->author }}</strong></div>
                    <div class="blog__date">
                        @if ($post->created_at)
                            {{ $post->created_at->format('F Y') }}
                        @else
                            Unknown Date
                        @endif
                    </div>
                </div>
                <div class="blog__excerpt">
                    {{ $post->excerpt }}
                </div>
                <div class="blog__content">
                    {!! $post->description !!}
                </div>
                <div class="blog__img">
                    <img src="{{ asset('post/images/' . $post->image) }}" alt="" />
                </div>
            </article>

            <div class="blognav">
                <div class="blognav__row">
                    @if ($key > 0)
                        <div class="blognav__item">
                            <a href="{{ route('blog.show', $posts[$key - 1]->id) }}" class="blognav__button">Previous post</a>
                            <h3>{{ $posts[$key - 1]->title }}</h3>
                            <p class="blognav__content">{{ $posts[$key - 1]->excerpt }}</p>
                        </div>
                    @endif

                    @if ($key < count($posts) - 1)
                        <div class="blognav__item">
                            <a href="{{ route('blog.show', $posts[$key + 1]->id) }}" class="blognav__button">Next post</a>
                            <h3>{{ $posts[$key + 1]->title }}</h3>
                            <p class="blognav__content">{{ $posts[$key + 1]->excerpt }}</p>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </main>
</body>
</html> -->

<body>
   
    <main class="container">
      <!-- <section class="breadcrumb">
        <a href="/" class="breadcrumb__link">Home</a>
        <a href="#" class="breadcrumb__link">Blog</a>
        <a href="#" class="breadcrumb__link"
          >How to enhance motivation for better business leads?</a
        >
      </section> -->
      <article class="blog">
        <div class="blog__img">
          <img src="img/blog-top.png" alt="" />
        </div>
        <h1 class="blog__title">
          How to Enhance Motivation for Better Business Leads?
        </h1>
        <div class="blog__meta">
          <div class="blog__by"><span>by</span> <strong>Admin</strong></div>
          <div class="blog__date">February 2021</div>
        </div>
        <div class="blog__excerpt">
          Read how businessmen must use UX design and enhancement of motivation
          for better business leads. Reveal the secret now!
        </div>
        <h2>
          Secrets About UX Design For Generating Business Leads Only A Handful
          Of People Know
        </h2>
        <p>
          Good UX design is all about captivating and joyful experiences,
          satisfaction, engagement with a touch of empathy towards the ‘user.’
          In a nutshell, a great UX should be user-centric. But the reason why
          UX design is important is that businesses don’t just seek satisfied
          users but ones that can be captured, retained, and compelled to stay
          loyal. To design an effective UX that influences users’ behaviour and
          offers business value, one must understand its psychology. The
          critical factor which works in this scenario is motivation.
        </p>
        <h2>Motivation</h2>
        <p>
          Good UX design is all about captivating and joyful experiences,
          satisfaction, engagement with a touch of empathy towards the ‘user.’
          In a nutshell, a great UX should be user-centric. But the reason why
          UX design is important is that businesses don’t just seek satisfied
          users but ones that can be captured, retained, and compelled to stay
          loyal. To design an effective UX that influences users’ behaviour and
          offers business value, one must understand its psychology. The
          critical factor which works in this scenario is motivation.
        </p>
        <p>
          1. Extrinsic motivation comes from the outside world and how our mind
          behaves to stimuli we receive from our peers, environment, or
          rewarding actions. For instance, appreciable comments and likes on a
          user’s social media post.
        </p>
        <p>
          2. Intrinsic motivation arises out of our own nature, emotions,
          intelligence, or wishes. For example: curiosity to learn and try new
          recipes, satisfaction from playing a game, accepting a challenge to
          solve a puzzle, etc.
        </p>
        <p>
          Decoding ‘how’ and ‘what’ motivates a user’s brain can be of great
          help for UX designers. The substance responsible for the brain’s
          motives is dopamine. Dopamine is a neurotransmitter produced in
          several brain regions responsible for reward inducing behaviour and
          motivation for setting goals and achieving them.
        </p>
        <div class="blog__img">
          <img src="img/blog-bottom.png" alt="" />
        </div>
      </article>
      <div class="blognav">
        <div class="blognav__row">
          <div class="blognav__item">
            <a href="#" class="blognav__button">Previous post</a>
            <h3 class="blognav__title">
              7 Ways Neuromarketing Impact Marketing Camp...
            </h3>
            <p class="blognav__content">
              In publishing and graphic design, Lorem ipsum is a placeholder
              text commonly used to demonstrate the visual form of a document or
              a typeface without relying on meaningful content.
            </p>
          </div>
          <div class="blognav__item">
            <a href="#" class="blognav__button">Next post</a>
            <h3 class="blognav__title">
              Can Good Design Grow Your Business And Customers?
            </h3>
            <p class="blognav__content">
              In publishing and graphic design, Lorem ipsum is a placeholder
              text commonly used to demonstrate the visual form of a document or
              a typeface without relying on meaningful content.
            </p>
          </div>
        </div>
      </div>
    </main>

  </body>

@include('frontend.layouts.footer')
