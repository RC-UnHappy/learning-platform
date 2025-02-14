@cannot('inscribre', $course)
  @can('review', $course)
    <div class="col-12 pt-0 mt-4 text-center">
      <h2 class="text-mutted">{{ __('Escribe una valoración') }}</h2> <hr>
    </div>

    <div class="container-fluid">
      <form action="{{ route('courses.add_review') }}" method="POST" class="form-inline" id="rating_form">
        @csrf
        <div class="form-group">
          <div class="col-12">
            <ul class="list-inline" style="font-size: 40px;" id="list_rating">
              <li class="list-inline-item star" data-number="1"><i class="fa fa-star yellow"></i></li>
              <li class="list-inline-item star" data-number="2"><i class="fa fa-star "></i></li>
              <li class="list-inline-item star" data-number="3"><i class="fa fa-star "></i></li>
              <li class="list-inline-item star" data-number="4"><i class="fa fa-star "></i></li>
              <li class="list-inline-item star" data-number="5"><i class="fa fa-star "></i></li>
            </ul>
          </div>
        </div>

        <br>

        <input type="hidden" name="rating_input" value="1">

        <input type="hidden" name="course_id" value="{{ $course->id }}">

        <div class="form-group">
          <div class="col-12">
            <textarea placeholder="{{ __('Escribe una reseña') }}" name="message" id="message" cols="100" rows="8" class="form-control"></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-warning text-white">
          <i class="fa fa-space-shuttle"> {{ __('Valorar curso') }}</i>
        </button>
      </form>
    </div>
  @endcan
@endcannot

@push('scripts')
    <script>
      jQuery(document).ready(function () {
        const ratingSelector = jQuery('#list_rating');

        ratingSelector.find('li').on('click', function () {
          const number = $(this).data('number');

          $("#rating_form").find("input[name=rating_input]").val(number);

          ratingSelector.find('li i').removeClass('yellow').each(function (index) {
            if((index + 1) <= number) {
              $(this).addClass('yellow');
            }
          });
        });
      });
    </script>
@endpush