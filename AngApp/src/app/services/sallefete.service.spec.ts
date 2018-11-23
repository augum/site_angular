import { TestBed, inject } from '@angular/core/testing';

import { SallefeteService } from './sallefete.service';

describe('SallefeteService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [SallefeteService]
    });
  });

  it('should be created', inject([SallefeteService], (service: SallefeteService) => {
    expect(service).toBeTruthy();
  }));
});
