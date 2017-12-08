<?php namespace App\Providers;

use App\Repositories\AreaRepository;
use App\Repositories\Interfaces\AreaInterface;
use App\Repositories\Interfaces\NationInterface;
use App\Repositories\Interfaces\ReportInterface;
use App\Repositories\NationRepository;
use App\Repositories\ReportRepository;
use App\Utils\ApiSerializer;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    $this->app['api.transformer']
      ->getAdapter()
      ->getFractal()
      ->setSerializer(new ApiSerializer);
  }

  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    $this->app->bind(AreaInterface::class, AreaRepository::class);
    $this->app->bind(NationInterface::class, NationRepository::class);
    $this->app->bind(ReportInterface::class,ReportRepository::class);

  }
}
