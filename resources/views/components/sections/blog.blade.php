<!-- Blog Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Search and Categories Column -->
            <div class="col-lg-4">
                <!-- Search -->
                <div class="mb-5">
                    <div class="input-group">
                        <input type="text" id="searchInput" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>

                <!-- Categories -->
                <div class="mb-5">
                    <h4 class="mb-4">Categories</h4>
                    <div class="list-group">
                        <button type="button" class="list-group-item list-group-item-action active" data-category="all">
                            All Categories
                        </button>
                        <button type="button" class="list-group-item list-group-item-action" data-category="dairy">
                            Dairy Products
                        </button>
                        <button type="button" class="list-group-item list-group-item-action" data-category="farm">
                            Farm News
                        </button>
                        <button type="button" class="list-group-item list-group-item-action" data-category="tips">
                            Tips & Tricks
                        </button>
                        <button type="button" class="list-group-item list-group-item-action" data-category="recipes">
                            Recipes
                        </button>
                    </div>
                </div>

                <!-- Latest Articles -->
                <div class="mb-5">
                    <h4 class="mb-4">Latest Articles</h4>
                    <div class="list-group-numbered">
                        <!-- Will be populated by JavaScript -->
                    </div>
                </div>
            </div>

            <!-- Articles Column -->
            <div class="col-lg-8">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <!-- Will be populated by JavaScript -->
                </div>

                <!-- Pagination -->
                <nav class="mt-5" aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <!-- Will be populated by JavaScript -->
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
