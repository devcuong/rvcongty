<section class="hero-img">
			<div class="hero-img__gradient"></div>
			<img src="https://reviewcongty.com/images/banner.jpg" alt="">
		</section>

		<section class="hero" style="margin-top: -225px">
			<div class="hero-body z-1">
				<h1 class="title has-text-white">Review lương bổng, đãi ngộ, HR,
					tuyển dụng, sếp và công việc,... gì cũng có</h1>
				<div>
					<div class="field has-addons">
						<div class="control has-icons-left is-expanded">
							<span class="icon is-small is-left"> <i class="fas fa-search"></i>
							</span> <input name="company-search" class="input" type="text"
								placeholder="Tìm công ty" autocomplete="off">
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="columns" style="height: auto !important;">
			<section class="companies column is-three-fifths"
				style="height: auto !important;">
				<div class="tabs" style="margin-bottom: 0.6rem">
					<ul>
						<li data-tab="top-comments" class="tab is-active"><a
							href="https://reviewcongty.com/?tab=latest"
							class="has-text-weight-bold"> <span class="icon has-text-info"> <i
									class="fas fa-comments"></i>
							</span> Mới cập nhật
						</a></li>
						<li data-tab="top-companies" class="tab "><a
							href="https://reviewcongty.com/?tab=best"
							class="has-text-weight-bold"> <span class="icon has-text-success">
									<i class="fas fa-thumbs-up"></i>
							</span> Top công ty xịn
						</a></li>
						<li data-tab="worst-companies" class="tab "><a
							href="https://reviewcongty.com/?tab=worst"
							class="has-text-weight-bold"> <span class="icon has-text-danger">
									<i class="fas fa-thumbs-down"></i>
							</span> Công ty bựa nên né
						</a></li>
					</ul>
				</div>
				<div class="tabs-section" style="height: auto !important;">
					<nav class="pagination is-small custom-pagination"
						role="navigation" aria-label="pagination">
						<span class="pagination-summary">Trang <b>1</b> trên tổng số <b>353</b></span>
						<ul class="pagination-list">
							<li><a href="https://reviewcongty.com/?tab=latest&amp;page=1"
								class="pagination-link is-current">1</a></li>
							<li><a href="https://reviewcongty.com/?tab=latest&amp;page=2"
								class="pagination-link ">2</a></li>
							<li><a href="https://reviewcongty.com/?tab=latest&amp;page=3"
								class="pagination-link ">3</a></li>
							<li><a href="https://reviewcongty.com/?tab=latest&amp;page=4"
								class="pagination-link ">4</a></li>
							<li><a href="https://reviewcongty.com/?tab=latest&amp;page=5"
								class="pagination-link ">5</a></li>
							<li><a href="https://reviewcongty.com/?tab=latest&amp;page=6"
								class="pagination-link ">6</a></li>
							<li><a href="https://reviewcongty.com/?tab=latest&amp;page=7"
								class="pagination-link ">7</a></li>
							<li><a href="https://reviewcongty.com/?tab=latest&amp;page=8"
								class="pagination-link ">8</a></li>
							<li><a href="https://reviewcongty.com/?tab=latest&amp;page=9"
								class="pagination-link ">9</a></li>
						</ul>
					</nav>
					<?php 
                                    while($row = mysqli_fetch_array($data["TatCaCongTy"])){
                                        ?>
                                        <div data-href="/companies/lien-viet-tech" class="company-item">
						<div class="company-info">
							<figure class="company-info__logo image is-64x64">
								<img src="<?php echo $servername ?>/mvc/public/asset/companies/logo/<?php echo $row["logo"]; ?>">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="<?php echo $servername ?>/cong-ty/<?php echo $row["slugcongty"]."-".$row["id"]?>">
										<?php echo $row["tencongty"]; ?> </a> 
										<span class="company-info__rating">
										 <span>
										 <?php
										 $n = $row["rate"];
										 $whole = floor($row["rate"]);
										 $fraction = $n - $whole;
										 for ($i=1; $i<=$whole;$i++){?>
										 <span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span>
										 <?php } ?>
										<span class="icon is-small has-text-warning"> <i class="fas fa-star-half-alt"></i>
										</span>
										<?php for ($i=1; $i<=(5-($whole+1));$i++){ ?>
										<span class="icon is-small has-text-warning"> <i class="far fa-star"></i>
										</span>
										<?php } ?>
										
										</span> <span class="company-info__rating-count">(<?php echo $row["luotdanhgia"] ?>)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> <?php echo $row["nganhnghe"] ?>
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> <?php echo $row["nhanvien"] ?> </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> <?php echo $row["diachi"] ?>
									</span>
								</div>
							</div>
						</div>
					</div>
                                        <?php } ?>
					<div data-href="/companies/lien-viet-tech" class="company-item">
						<div class="company-info">
							<figure class="company-info__logo image is-64x64">
								<img src="https://reviewcongty.com/images/companies/lien-viet-tech-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/lien-viet-tech">
										Lien Viet Tech </a> <span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(12)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 51-150 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 109 Tran Hung Dao Hoan Kiem Ha Noi
									</span>
								</div>
							</div>
						</div>
					</div>
					<div data-href="/companies/keaz" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="https://reviewcongty.com/images/companies/keaz-logo.jpg">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/keaz"> Keaz </a> <span
										class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(2)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 1-50 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 220A-C Nguyễn Đình chiểu, phường 6 District 3 Ho Chi
										Minh
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/sakuko-viet-nam" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="https://reviewcongty.com/images/companies/sakuko-vi-t-nam-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/sakuko-viet-nam">
										Sakuko Việt Nam </a> <span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(216)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 1-50 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 1 Trung Yên Plaza Cau Giay Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/softdreams" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="https://reviewcongty.com/images/companies/softdreams-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/softdreams">
										Softdreams </a> <span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(7)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 51-150 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 8 Nhà khách ATS, số 8 Phạm Hùng Nam Tu Liem Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/tek-experts" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="https://reviewcongty.com/images/companies/tek-experts-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/tek-experts"> Tek
										Experts </a> <span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(300)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Dịch vụ
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 501-1000 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> Lieu Giai Ba Dinh Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/itviec" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="https://reviewcongty.com/images/companies/itviec-logo.jpg">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/itviec"> ITviec </a>
									<span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(29)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 1-50 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 60 Nguyen Van Thu District 1 Ho Chi Minh
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/luxstay" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="https://reviewcongty.com/images/companies/luxstay-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/luxstay"> Luxstay </a>
									<span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(28)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 1-50 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 68 Duong Dinh Nghe Cau Giay Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/bh-tech" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="https://reviewcongty.com/images/companies/bh-tech-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/bh-tech"> BH Tech </a>
									<span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(1)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Dịch vụ
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 1-50 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> Duy Tan Cau Giay Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/sapo" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="https://reviewcongty.com/images/companies/sapo-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/sapo"> SAPO </a> <span
										class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(32)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 301-500 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 266 Đội Cấn Ba Dinh Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/nashtech" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="https://reviewcongty.com/images/companies/nashtech-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/nashtech"> NashTech
									</a> <span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(87)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Dịch vụ
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 301-500 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 364 Cong Hoa Tan Binh Ho Chi Minh
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/bkav" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="https://reviewcongty.com/images/companies/bkav-logo.jpg">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/bkav"> Bkav </a> <span
										class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(32)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 51-150 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> Khu Do Thi Yen Hoa Cau Giay Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/finos-technology" class="company-item">
						<div class="company-info">
							<figure class="company-info__logo image is-64x64">
								<img src="https://reviewcongty.com/images/companies/finos-technology.jpg">
							</figure>
							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/finos-technology">
										FinOS Technology </a> <span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(5)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 51-150 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> Ho Chi Minh, Ha Noi
									</span>
								</div>
							</div>
						</div>
					</div>
					<div data-href="/companies/designveloper-dsv" class="company-item">
						<div class="company-info">
							<figure class="company-info__logo image is-64x64">
								<img src="https://reviewcongty.com/images/companies/designveloper-dsv-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/designveloper-dsv">
										Designveloper (DSV) </a> <span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(32)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Dịch vụ
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 51-150 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 146 Nguyen Thai Binh District 1 Ho Chi Minh
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/passion-fruit-software-development"
						class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img
									src="https://reviewcongty.com/images/companies/passion-fruit-software-development.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a
										href="https://reviewcongty.com/companies/passion-fruit-software-development">
										Passion Fruit Software Development </a> <span
										class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span></span> <span class="company-info__rating-count">(4)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 51-150 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> Tan Binh, Ho Chi Minh
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/passion-fruit-software"
						class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="https://reviewcongty.com/images/companies/passion-fruit-software-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a
										href="https://reviewcongty.com/companies/passion-fruit-software">
										Passion Fruit Software </a> <span class="company-info__rating">
										<span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(37)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 1-50 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 1 Bach Dang Tan Binh Ho Chi Minh
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/cong-ty-tnhh-enjoyworks"
						class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="https://reviewcongty.com/images/companies/cong-ty-tnhh-enjoyworks.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a
										href="https://reviewcongty.com/companies/cong-ty-tnhh-enjoyworks">
										Công Ty TNHH Enjoyworks </a> <span
										class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(43)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 1-50 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> Da Nang, Ho Chi Minh
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/cong-nghe-dong-duong-iist"
						class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="./rvcongty_files/cong-ngh-dong-d-ng-iist-logo.jpg">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a
										href="https://reviewcongty.com/companies/cong-nghe-dong-duong-iist">
										CÔNG NGHỆ ĐÔNG DƯƠNG (IIST) </a> <span
										class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(20)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Dịch vụ
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 51-150 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 14th Flr Diamond Flower Tower, 48 Le Van Luong Str
										Thanh Xuan Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/rikkeisoft" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="https://reviewcongty.com/images/companies/rikkeisoft-logo.png">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/rikkeisoft">
										RIKKEISOFT </a> <span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(127)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Dịch vụ
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 501-1000 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> HH3 Building, Me Tri Street Nam Tu Liem Ha Noi
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/bombus" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="https://reviewcongty.com/images/companies/bombus.jpg">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/bombus"> Bombus </a>
									<span class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(2)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 51-150 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> District 4, Ho Chi Minh
									</span>
								</div>
							</div>

						</div>
					</div>
					<div data-href="/companies/lozi" class="company-item">
						<div class="company-info">

							<figure class="company-info__logo image is-64x64">
								<img src="https://reviewcongty.com/images/companies/lozi-logo.jpg">
							</figure>

							<div class="company-info__detail">
								<h2
									class="is-size-5 has-text-weight-semibold company-info__name">
									<a href="https://reviewcongty.com/companies/lozi"> Lozi </a> <span
										class="company-info__rating"> <span><span
											class="icon is-small has-text-warning"> <i
												class="fas fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="fas fa-star-half-alt"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span><span class="icon is-small has-text-warning"> <i
												class="far fa-star"></i>
										</span></span> <span class="company-info__rating-count">(57)</span>
									</span>
								</h2>
								<div class="company-info__other">
									<span style="margin-right: 0.3rem"> <span class="icon"> <i
											class="fas fa-briefcase"></i></span> Sản phẩm
									</span> <span><span class="icon"> <i class="fas fa-users"></i>
									</span> 51-150 </span>
								</div>
								<div class="company-info__location">
									<span> <span class="icon"> <i class="fas fa-building"></i>
									</span> 268 To Hien Thanh District 10 Ho Chi Minh
									</span>
								</div>
							</div>

						</div>
					</div>

					<div style="margin-top: 0.6rem">
						<nav class="pagination is-small custom-pagination"
							role="navigation" aria-label="pagination">
							<span class="pagination-summary">Trang <b>1</b> trên tổng số <b>353</b></span>
							<ul class="pagination-list">
								<li><a href="https://reviewcongty.com/?tab=latest&amp;page=1"
									class="pagination-link is-current">1</a></li>
								<li><a href="https://reviewcongty.com/?tab=latest&amp;page=2"
									class="pagination-link ">2</a></li>
								<li><a href="https://reviewcongty.com/?tab=latest&amp;page=3"
									class="pagination-link ">3</a></li>
								<li><a href="https://reviewcongty.com/?tab=latest&amp;page=4"
									class="pagination-link ">4</a></li>
								<li><a href="https://reviewcongty.com/?tab=latest&amp;page=5"
									class="pagination-link ">5</a></li>
								<li><a href="https://reviewcongty.com/?tab=latest&amp;page=6"
									class="pagination-link ">6</a></li>
								<li><a href="https://reviewcongty.com/?tab=latest&amp;page=7"
									class="pagination-link ">7</a></li>
								<li><a href="https://reviewcongty.com/?tab=latest&amp;page=8"
									class="pagination-link ">8</a></li>
								<li><a href="https://reviewcongty.com/?tab=latest&amp;page=9"
									class="pagination-link ">9</a></li>
							</ul>
						</nav>

					</div>
				</div>
			</section>
			<section class="summary-reviews column z-1">
				<h1 class="is-size-4 has-text-weight-bold reviews__header">Review
					gần đây</h1>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Văn Nguyễn</span> đã review <a
							href="https://reviewcongty.com/companies/lien-viet-tech"> Lien
							Viet Tech </a>
					</h3>
					<p>
						20 phút trước <span><span class="icon is-small has-text-warning">
								<i class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span></span>
					</p>
					<p>Mọi thứ đều ổn. Lương cũng ổn so mức lương khi mới ra trường.
						Chế độ đãi ngộ tốt. Mọi người đều thân thiện =)).</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Ẩn danh</span> đã review <a
							href="https://reviewcongty.com/companies/keaz"> Keaz </a>
					</h3>
					<p>
						32 phút trước <span><span class="icon is-small has-text-warning">
								<i class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>Technical Lead hiện tại khá cùi nên cũng chả giải quyết gì.</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Ẩn danh</span> đã review <a
							href="https://reviewcongty.com/companies/sakuko-viet-nam"> Sakuko
							Việt Nam </a>
					</h3>
					<p>
						35 phút trước <span><span class="icon is-small has-text-warning">
								<i class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>Em thấy các anh chị quản lý cũ rất có tâm mà công ty không giữ
						được. Ngày trước sếp Hằng còn bỏ tiền túi để mừng tuổi cho nv bán
						bánh bọn em. Giờ anh …</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Ẩn danh</span> đã review <a
							href="https://reviewcongty.com/companies/softdreams"> Softdreams
						</a>
					</h3>
					<p>
						Một giờ trước <span><span class="icon is-small has-text-warning">
								<i class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>- Công ty thuần Việt, lương chỉ ở mức khá, các sếp đều khá nice
						- PM có năng lực nhưng quy trình làm việc chưa rõ ràng, ít buổi
						chia sẻ đào tạo, chủ …</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Ẩn danh</span> đã review <a
							href="https://reviewcongty.com/companies/tek-experts"> Tek
							Experts </a>
					</h3>
					<p>
						Một giờ trước <span><span class="icon is-small has-text-warning">
								<i class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>Cho em hỏi là công ty mình có tuyển thu họ vào làm hay sao ạ ,
						dạo này để ý trên floor có anh nào đeo đủ vòng vèo nhẫn nhủng xong
						mặt lúc nào cũng như…</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Tìm việc</span> đã review <a
							href="https://reviewcongty.com/companies/itviec"> ITviec </a>
					</h3>
					<p>
						Một giờ trước <span><span class="icon is-small has-text-warning">
								<i class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>Cho em hỏi em tính nộp đơn ứng tuyển ở HCm, em thấy bạn em bảo
						đang tuyển 10 vị trí lận mà bạn em lại không đậu, có phải Để số
						cho vui không ạ, em …</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Ứng viên</span> đã review <a
							href="https://reviewcongty.com/companies/luxstay"> Luxstay </a>
					</h3>
					<p>
						2 giờ trước <span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>Bên này backend Dev range lương như nào nhỉ các bác?</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Ẩn danh</span> đã review <a
							href="https://reviewcongty.com/companies/bh-tech"> BH Tech </a>
					</h3>
					<p>
						2 giờ trước <span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>ae nào mới ra trường hoặc đi thực tập thì ko nên vào.</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Dev</span> đã review <a
							href="https://reviewcongty.com/companies/sapo"> SAPO </a>
					</h3>
					<p>
						2 giờ trước <span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>Làm dev ở đây thế nào vậy các ac</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Principal 3</span> đã review <a
							href="https://reviewcongty.com/companies/nashtech"> NashTech </a>
					</h3>
					<p>
						3 giờ trước <span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span></span>
					</p>
					<p>lương 1k9 net sướng</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Một cựu nhân viên AP 4 năm tại
							AP (Chăm sóc khách hàng)</span> đã review <a
							href="https://reviewcongty.com/companies/bkav"> Bkav </a>
					</h3>
					<p>
						4 giờ trước <span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>1. Nếu nói về nhân viên nói chung thì đều rất hoà đồng vui vẻ,
						mọi người phần lớn là lành tính do môi trường ở đây không có gì
						phải tranh đấu. 2. Sếp…</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Định xưng tên nhưng thôi</span>
						đã review <a
							href="https://reviewcongty.com/companies/finos-technology"> FinOS
							Technology </a>
					</h3>
					<p>
						4 giờ trước <span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>Anh em đánh giá hơi tiêu cực nên có thể nhiều người nghĩ là đang
						dìm hàng. Vì vậy để mình tóm lại vài điều như dưới: - Về tổng quát
						thì công ty mới…</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">em trai giấu tên</span> đã
						review <a
							href="https://reviewcongty.com/companies/designveloper-dsv">
							Designveloper (DSV) </a>
					</h3>
					<p>
						5 giờ trước <span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="far fa-star"></i>
						</span></span>
					</p>
					<p>Công ty có chị đẹp BA mặt sắc, giỏi chịu đựng áp lực tứ phương
						tám hướng, chiên nghiệp, vui vẻ không quạu. Bị cái hiếm khi thấy
						trên công ty, rồi giờ …</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">Ẩn danh</span> đã review <a
							href="https://reviewcongty.com/companies/passion-fruit-software-development">
							Passion Fruit Software Development </a>
					</h3>
					<p>
						5 giờ trước <span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span></span>
					</p>
					<p>AE QC apply nhe

						https://itviec.com/it-jobs/quality-and-tester-engineers-qc-qa-passion-fruit-software-development-4039?utm_campaign=gsn_brand&amp;utm_me…</p>
				</div>
				<div class="review">
					<h3>
						<span class="has-text-weight-bold">MRS</span> đã review <a
							href="https://reviewcongty.com/companies/passion-fruit-software">
							Passion Fruit Software </a>
					</h3>
					<p>
						5 giờ trước <span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span><span class="icon is-small has-text-warning"> <i
								class="fas fa-star"></i>
						</span></span>
					</p>
					<p>Passion Fruit Software Development - Omnicasa Software Solutions
						Passion Fruit Software Development Ltd,Co was established on 2004
						with 100% investme…</p>
				</div>

			</section>
		</div>
