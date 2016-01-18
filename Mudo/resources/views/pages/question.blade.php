@extends ('layout')
@section('mainContent')
		<section class="quiz-page">
			<div class="quiz-yesorno">
				<h2>
					@foreach($questions as $question)
						<p>{{ $question->title }}</p>
						<?php
						$tag=$question->tag;
						$img=$question->image;
						?>
					@endforeach
				</h2>
				<div class="yesorno">
          <div class="yes">
            <a href="/question2/{{ $tag }}">yes</a>
          </div>
          <div class="no">
            <a href="/question">no</a>
          </div>
        </div>
			</div>
      <div id="latest">
        <img src="../{{ $img }}" alt="">
      </div>
    </section>
    <section>
      <div class="loading">
        <h3>En attente de propositions de films </br><span>...</span></h3>
      </div>
    </section>
@endsection
