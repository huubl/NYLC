<form role="search" method="get" class="search-form flex py-1" action="{{ esc_url( home_url( '/' ) ) }}">
  <label class='w-3/4'>
    <span class="screen-reader-text">{{ _x( 'Search for:', 'label' ) }}</span>
    <input type="search" class="search-field" placeholder="{!! esc_attr_x( 'Search &hellip;', 'placeholder' ) !!}" value="{{ get_search_query() }}" name="s" />
  </label>
  <input type="submit" class="search-submit w-1/4" value="{{ esc_attr_x( 'Search', 'submit button' ) }}" />
</form>