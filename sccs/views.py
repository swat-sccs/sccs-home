from django.shortcuts import render

def home(request):
  context_dict = {}
  return render(request, 'home.html', context_dict)

def about(request):
  context_dict = {}
  return render(request, 'about.html', context_dict)

