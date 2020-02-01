from django.conf.urls import url
from . import views

app_name='music'

urlpatterns = [
    
    #
    url(r'^login/$',views.login_view,name="login"),

    #
    url(r'^logout/$', views.logout_view, name="logout"),


	#/music/
    url(r'^$', views.IndexView.as_view(), name='index'),


    url(r'^register/$', views.UserFormView.as_view(), name='register'),

    #/music/<album_id>/
    url(r'^(?P<pk>[0-9]+)/$', views.DetailView.as_view(), name='detail'),

    #/music/album/add/
    url(r'album/add/$', views.AlbumCreate.as_view(), name='album-add'),

    #/music/album/2/
    url(r'album/(?P<pk>[0-9]+)/$',views.AlbumUpdate.as_view(),name='album-update'),

    #/music/album/2/delete/
    url(r'album/(?P<pk>[0-9]+)/$',views.AlbumDelete.as_view(),name='album-delete'),
  ]