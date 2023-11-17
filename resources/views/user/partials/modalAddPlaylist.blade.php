<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex text-center justify-content-center" style="background-color: rgb(238, 181, 0)">
                <h1 class="fontMonsseratExtraBold text-center" id="exampleModalLabel" style="font-size: 35px; color: black">Create Playlist</h1>
            </div>

            <div class="modal-body fontMonsseratRegular bg-dark">
                <form>



                    <h1 class="fontMonsseratSemiBold" style="font-size: 20px;">Playlist Name</h1>
                    <div class="input-group my-3 mb-5">
                        <input type="text" class="form-control fontMonsseratSemiBold bg-dark text-white" aria-describedby="basic-addon1" style="background-color: darkslategrey">
                    </div>
                        



                
                    <!-- @JackGame31 @JovanAndhika di sini user masukkin lagu, klik search. lalu muncul list lagu di bawah e. di table bawah ini. hrs e code e sama kayak yang di search, cuma di sini <i> nya jadi plus. -->
                    <h1 class="fontMonsseratSemiBold mt-5" style="font-size: 20px;">Search songs to add</h1>
                    <div class="input-group my-3">
                        
                        <input type="text" class="form-control fontMonsseratRegular bg-dark text-white"  aria-describedby="basic-addon1" style="background-color: darkslategrey">
                        <button type="button" class="btn btn-outline-light fontMonsseratSemiBold">Search</button>
                    </div>

                    <!--Ini table yang muncul-->
                    
                    <table class="table table-striped table-hover table-dark mb-5">
                        <thead>
                          <tr>
                            <th class="fontMonsseratSemiBold" scope="col">Song</th>
                            <th class="fontMonsseratSemiBold" scope="col">Artist</th>
                            <th class="fontMonsseratSemiBold" scope="col"></th>
                          </tr>
                        </thead>
                        <tbody class="text-left">
                          <tr>
                            <th>Ghost<!-- @JackGame31 @JovanAndhika ini title --></th>
                            <th>Justin Bieber <!-- @JackGame31 @JovanAndhika ini artist --></th>
                            <th><a href=""><i class="bi bi-plus-lg text-white"></i></a></th> <!-- @JackGame31 @JovanAndhika ini button plus nya, pas dipencet, nanti lagunya masuk ke table songs added, di bawah.-->

                          
                          </tr>
                          <tr>
                            <th>Sasageyo</th>
                            <th>Hiroyuki Sawano</th>
                            <th><a href=""><i class="bi bi-plus-lg text-white"></i></a></th>

             
                          </tr>
                          <tr>
                            <th>Happy Ya Ya</th>
                            <th>Guru Sekolah Minggu</th>
                            <th><a href=""><i class="bi bi-plus-lg text-white"></i></a></th>
                            
                          </tr>
                        </tbody>
                    </table>





                    <h1 class="p-2 fontMonsseratSemiBold my-3 mt-5" style="font-size: 20px"> Songs Added</h1>

                    <!--Ini, nanti lagu yang dipencet plus masuk sini.-->

                    <table class="table table-striped table-hover table-dark">
                        <thead>
                          <tr>
                            <th class="fontMonsseratSemiBold" scope="col">Song</th>
                            <th class="fontMonsseratSemiBold" scope="col">Artist</th>
                            <th class="fontMonsseratSemiBold" scope="col"></th>

                           
                          </tr>
                        </thead>
                        <tbody class="text-left">
                          <tr>
                            <th>Ghost<!-- @JackGame31 @JovanAndhika ini title --></th>
                            <th>Justin Bieber</th>
                            <th><a href="/"><i class="bi bi-trash-fill text-white"></i></a></th>

                          
                          </tr>
                          <tr>
                            <th>Sasageyo</th>
                            <th>Hiroyuki Sawano</th>
                            <th><a href="/"><i class="bi bi-trash-fill text-white"></i></a></th>

             
                          </tr>
                          <tr>
                            <th>Happy Ya Ya</th>
                            <th>Guru Sekolah Minggu</th>
                            <th><a href="/"><i class="bi bi-trash-fill text-white"></i></a></th>
                            
                          </tr>
                        </tbody>
                    </table>
                
                </form>
            </div>

            <div class="modal-footer" style="background-color: rgb(238, 181, 0)">
                <button type="button" class="btn btn-outline-dark fontMonsseratSemiBold" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-dark fontMonsseratSemiBold">Save</button>
                <!-- @DanielCJ12479 @JackGame31 @JovanAndhika @royJuanAndika @terrGit perlu buat js kalau tombol go playlist kesimpen di database & tabel nambah playlist yg baru -->
            </div>  

        </div>
    </div>
</div>