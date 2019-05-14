#include<iostream.h>
#include<conio.h>
void main()
{
  int x[3],y[3],z[3];
  float hz,hy,hx,hslx,hsly;
  cout<<"Mencari Persamaan Linier\ndengan bentuk :\n";
  cout<<"x1 + y1 = z1\n";
  cout<<"x2 + y2 = z2\n";
  cout<<"========================\n";
  for(int i=1;i<3;i++)
  {
 cout<<"Masukkan Nilai x"<<i<<" : ";cin>>x[i];
 cout<<"Masukkan Nilai y"<<i<<" : ";cin>>y[i];
 cout<<"Masukkan Nilai z"<<i<<" : ";cin>>z[i];
  }
  cout<<"\nSehingga menjadi :\n";
  cout<<x[1]<<"x + "<<y[1]<<"y = "<<z[1]<<"\n";
  cout<<x[2]<<"x + "<<y[2]<<"y = "<<z[2]<<"\n";
  if(x[1] == x[2])
  {
 int m;
 hy= y[1]-y[2];
 hz= z[1]-z[2];
 hsly= hz / hy;
 m= hsly * y[1];
 hx= z[1]- m;
 hslx= hx / x[1];
  }
  else
  {
 int m,mx,my;
 float n,x1,y1,z1,x2,y2,z2;
 m= x[2] * x[1];
 mx= m / x[1];
 my= m / x[2];
 y1= y[1] * mx;
 z1= z[1] * mx;
 y2= y[2] * my;
 z2= z[2] * my;
 hy= y1-y2;
 hz= z1-z2;
 hsly= hz / hy;
 n= hsly * y[1];
 hx = z[1] -  n;
 hslx= hx / x[1];
  }
  cout<<"\nJawabannya adalah :\n";
  cout<<"Nilai x = "<<hslx<<"\n";
  cout<<"Nilai y = "<<hsly<<"\n";
}