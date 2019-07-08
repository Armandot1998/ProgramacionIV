import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { MostrarListComponent } from './Mostrar-lista.component';

describe('MostrarListComponent', () => {
  let component: MostrarListComponent;
  let fixture: ComponentFixture<MostrarListComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MostrarListComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(MostrarListComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
