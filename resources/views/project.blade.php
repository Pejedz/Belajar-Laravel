@extends('master')
@section('title', 'Master Project')
@section('content')
<div class="col-md-10 text-dark overflow-auto" style="height:100vh;">
    <div class="row g-0 mt-3 ps-5">
        <div class="col-md-10">
          <div class="card shadow">
            <div class="card-header text-center"><h1>Master Project</h1></div>
            <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">From</th>
                    <th scope="col">Description</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1.</th>
                    <td>@keballSerangan</td>
                    <td>Liked your video 💗</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#view" style="background-color: cornflowerblue;"><i class="bi bi-eye"></i></a>
                        <a href="" class="btn btn-sm btn-secondary" data-bs-toggle="modal"data-bs-target="#block"><i class="bi bi-ban"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2.</th>
                    <td>@jeLLz</td>
                    <td>Liked your video 💗</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#view" style="background-color: cornflowerblue;"><i class="bi bi-eye"></i></a>
                        <a href="" class="btn btn-sm btn-secondary" data-bs-toggle="modal"data-bs-target="#block"><i class="bi bi-ban"></i></a>
                    </td>
                  </tr>
                  
                  <tr>
                    <th scope="row">3.</th>
                    <td>@Xymal</td>
                    <td>Tagged you in the Comment : @Pejed lucu banget ini bang.</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#view" style="background-color: cornflowerblue;"><i class="bi bi-eye"></i></a>
                        <a href="" class="btn btn-sm btn-secondary" data-bs-toggle="modal"data-bs-target="#block"><i class="bi bi-ban"></i></a>
                    </td>
                  </tr>

                  <tr>
                      <th scope="row">4.</th>
                      <td>@Riveon</td>
                      <td>Just Followed You 🗿</td>
                      <td>
                          <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#view" style="background-color: cornflowerblue;"><i class="bi bi-eye"></i></a>
                          <a href="" class="btn btn-sm btn-secondary" data-bs-toggle="modal"data-bs-target="#block"><i class="bi bi-ban"></i></a>
                      </td>
                    </tr>
                  
                  <tr>
                      <th scope="row">5.</th>
                      <td>@sodiannn</td>
                      <td>Liked your video 💗</td>
                      <td>
                          <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#view" style="background-color: cornflowerblue;"><i class="bi bi-eye"></i></a>
                          <a href="" class="btn btn-sm btn-secondary" data-bs-toggle="modal"data-bs-target="#block"><i class="bi bi-ban"></i></a>
                      </td>
                  </tr>

                  <tr>
                      <th scope="row">6.</th>
                      <td>@Kakap</td>
                      <td>Liked your video 💗</td>
                      <td>
                          <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#view" style="background-color: cornflowerblue;"><i class="bi bi-eye"></i></a>
                          <a href="" class="btn btn-sm btn-secondary" data-bs-toggle="modal"data-bs-target="#block"><i class="bi bi-ban"></i></a>
                      </td>
                  </tr>

                  <tr></tr>
                      <th scope="row">7.</th>
                      <td>@Chizmoon</td>
                      <td>Just Followed You 🗿</td>
                      <td>
                          <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#view" style="background-color: cornflowerblue;"><i class="bi bi-eye"></i></a>
                          <a href="" class="btn btn-sm btn-secondary" data-bs-toggle="modal"data-bs-target="#block"><i class="bi bi-ban"></i></a>
                      </td>
                  </tr>

                  <tr></tr>
                      <th scope="row">8.</th>
                      <td>@gamersindoonesia88</td>
                      <td>Just Followed You 🗿</td>
                      <td>
                          <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#view" style="background-color: cornflowerblue;"><i class="bi bi-eye"></i></a>
                          <a href="" class="btn btn-sm btn-secondary" data-bs-toggle="modal"data-bs-target="#block"><i class="bi bi-ban"></i></a>
                      </td>
                  </tr>
                </tbody>
              </table>
              <div class="modal fade" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">You sure want to view this Message?</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">View</button>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal fade" id="block" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">You sure want to Block this User?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-dark text-light">Block</button>
                  </div>
                </div>
              </div>
          </div>
            </div>
          </div>
        </div>
            <div class="forms">
            <form class="col-md-8">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold mt-3">Make New Post!</label>
                <input type="text" class="form-control bg-light" id="" aria-describedby="">
                <div id="emailHelp" class="form-text">Write u want to Write for New Post! 😁👌🔥</div>
              </div>
              <button type="submit" class="btn btn-primary">Send</button>
            </form>
          </div>
          <div class="col-md-4"></div>
      </div>
  </div>
</div>

@endsection
