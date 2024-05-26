    <!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.parts.heade')
  </head>
  <body>
    <section class="admin">
      <div class="row-grid">
        <div class="admin-sidebar">
            @include('admin.parts.sidebar')
        </div>
        <div class="admin-content">
          @include('admin.parts.header')
          <div class="admin-content-main">
            <div class="admin-content-main-title">
              <h1>@yield('title')</h1>
            </div>
            <div class="admin-content-main-content">
                @yield('content')
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
        @include("admin.parts.footer")
    </footer>
  </body>
</html>
