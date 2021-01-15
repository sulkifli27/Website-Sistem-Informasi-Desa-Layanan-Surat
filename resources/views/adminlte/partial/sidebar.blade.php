<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
      <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->penduduk->nama_lengkap}} ({{Auth::user()->level}}) Desa</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->   
             <li class="nav-item">
              <a href="{{route('dashboard')}}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                 Dashboard
                  </p>
                </a>
              </li> 
        <li class="nav-item">
          <a href="{{route('userindex')}}" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
             User
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="{{route('kkindex')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                Kartu Keluarga
                </p>
              </a>
            </li>  
          <li class="nav-item">
            <a href="{{route('pendudukindex')}}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                Penduduk
                </p>
              </a>
            </li>  
            <li class="nav-item">
              <a href="{{route('kelahiranindex')}}" class="nav-link">
                  <i class="nav-icon fas fa-baby"></i>
                  <p>
                  Kelahiran
                  </p>
                </a>
              </li>   
              <li class="nav-item">
                <a href="{{route('kematianindex')}}" class="nav-link">
                  <i class="nav-icon fas fa-heartbeat "></i>
                    <p>
                    Kematian
                    </p>
                  </a>
                </li>    
                <li class="nav-item">
                  <a href="{{route('kepindahanindex')}}" class="nav-link">
                    <i class="nav-icon fas fa-people-arrows"></i>
                      <p>
                        Kepindahan
                      </p>
                    </a>
                  </li>  
                  <li class="nav-item">
                    <a href="{{route('pendatangindex')}}" class="nav-link">
                      <i class="nav-icon fas fa-walking"></i>
                        <p>
                          Pendatang
                        </p>
                      </a>
                    </li>  
                    <li class="nav-item">
                      <a href="{{route('beritaindex')}}" class="nav-link">
                        <i class="nav-icon fas fa-file-signature"></i>
                          <p>
                            Berita
                          </p>
                        </a>
                    </li>  
                    <li class="nav-item">
                      <a href="{{route('suratkmindex')}}" class="nav-link">
                        <i class="nav-icon fas fa-envelope-open-text"></i>
                          <p>
                            Surat Kurang Mampu
                          </p>
                        </a>
                    </li>  
                    <li class="nav-item">
                      <a href="{{route('suratusahaindex')}}" class="nav-link">
                        <i class="nav-icon fas fa-mail-bulk"></i>
                          <p>
                            Surat Keterangan Usaha
                          </p>
                        </a>
                    </li>  
          </ul>
      </ul>
    </nav>
  
  </div>